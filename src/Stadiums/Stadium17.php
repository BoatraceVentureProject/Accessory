<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium17 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://www.boatrace-miyajima.com';
        $crawlerFormat = '%s/race_common/require/kaisai_reload.php?date=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('POST', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/table[6]/tbody';
        $racerNameFormat = '%s/tr[%d]/td[2]/p[1]/a';
        $timeFormat = '%s/tr[%d]/td[%d]';

        foreach (range(1, 6) as $bracket) {
            $xpath = sprintf($racerNameFormat, $baseXpath, $bracket * 2 + 1);
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($crawler->filterXPath($xpath)->text());

            foreach (range(5, 8) as $key) {
                $xpath = sprintf($timeFormat, $baseXpath, $bracket * 2 + 1, $key);
                $response[
                    match ($key) {
                        5 => 'bracket' . $bracket . 'ExhibitionTime',
                        6 => 'bracket' . $bracket . 'LapTime',
                        7 => 'bracket' . $bracket . 'TurnTime',
                        8 => 'bracket' . $bracket . 'StraightTime',
                    }
                ] = (float) $crawler->filterXPath($xpath)->text();
            }
        }

        return $response;
    }

    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function comments(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://www.boatrace-miyajima.com';
        $crawlerFormat = '%s/race_common/require/kaisai_reload.php?date=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('POST', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[6]/div[1]/table/tbody';

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($crawler->filterXPath(
                    sprintf('%s/tr[%d]/td[2]/p[1]/a', $baseXpath, $bracket + 1)
                )->text());

            $comment1 = $this->formatComment($crawler->filterXPath(
                sprintf('%s/tr[%d]/td[4]/p/text()', $baseXpath, $bracket + 1)
            )->text());

            $comment2 = $this->formatComment($crawler->filterXPath(
                sprintf('%s/tr[%d]/td[4]/p', $baseXpath, $bracket + 1)
            )->text());

            if ($comment1 === $comment2) {
                $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
                $response['bracket' . $bracket . 'RacerComment1'] = $comment1;
            } else {
                $response['bracket' . $bracket . 'RacerComment2Label'] = '当日コメント';
                $response['bracket' . $bracket . 'RacerComment2'] = $comment2;
            }
        }

        return $response;
    }
}
