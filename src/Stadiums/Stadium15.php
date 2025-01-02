<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium15 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.marugameboat.jp';
        $crawlerFormat = '%s/asp/kyogi/15/pc/yoso05%02d.htm?slide=2';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[2]/div/div/div[3]/table';
        $racerNameFormat = '%s/tbody[%d]/tr[%d]/td[2]/div/div/div[2]/div[2]/a';
        $timeFormat = '%s/tbody[%d]/tr[%d]/td[%d]';

        foreach (range(1, 6) as $bracket) {
            foreach (range(1, 2) as $absence) {
                $xpath = sprintf($racerNameFormat, $baseXpath, $bracket, $absence);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response['bracket' . $bracket . 'RacerName'] =
                        $this->removeSpace($crawler->filterXPath($xpath)->text());
                }
            }

            foreach (range(5, 8) as $key) {
                foreach (range(1, 2) as $absence) {
                    $xpath = sprintf($timeFormat, $baseXpath, $bracket, $absence, $key);
                    if ($crawler->filterXPath($xpath)->count()) {
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
        $baseUrl = 'https://www.marugameboat.jp';
        $crawlerFormat = '%s/asp/kyogi/15/pc/yoso05%02d.htm?slide=3';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[2]/div/div';
        $racerNameFormat = '%s/div[3]/table/tbody[%d]/tr[1]/td[2]/div/div/div[2]/div[2]/a';
        $racerComment1Format = '%s/div[4]/table/tbody[%d]/tr/td[3]/p[2]';
        $racerComment2Format = '%s/div[4]/table/tbody[%d]/tr/td[3]/p[1]';

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($crawler->filterXPath(
                    sprintf($racerNameFormat, $baseXpath, $bracket)
                )->text());

            $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
            $response['bracket' . $bracket . 'RacerComment1'] =
                preg_replace('/\A前日/u', '', $this->formatComment($crawler->filterXPath(
                    sprintf($racerComment1Format, $baseXpath, $bracket)
                )->text()));

            $response['bracket' . $bracket . 'RacerComment2Label'] = '当日コメント';
            $response['bracket' . $bracket . 'RacerComment2'] =
                preg_replace('/\A当日/u', '', $this->formatComment($crawler->filterXPath(
                    sprintf($racerComment2Format, $baseXpath, $bracket)
                )->text()));
        }

        return $response;
    }
}
