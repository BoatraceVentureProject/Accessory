<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium23 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-karatsu.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.com-rname', '.col5', '.col6', '.col7', '.col8']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($times['.col5'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($times['.col6'][$bracket * 2 - 1] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($times['.col7'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'StraightTime'] = (float) ($times['.col8'][$bracket - 1] ?? 0);
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
        $baseUrl = 'https://www.boatrace-karatsu.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=3&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div/div/div[2]/table/tbody';
        $racerNameFormat = '%s/tr[%d]/td[2]/ul/li[2]/a';
        $commentFormat = '%s/tr[%d]/td[3]/p[%d]';

        foreach (range(1, 6) as $bracket) {
            $xpath = sprintf($racerNameFormat, $baseXpath, $bracket);
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeSpace($crawler->filterXPath($xpath)->text());

            foreach (range(1, 2) as $key) {
                $xpath = sprintf($commentFormat, $baseXpath, $bracket, $key);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response['bracket' . $bracket . 'RacerComment' . $key . 'Label'] = match ($key) {
                        1 => '前日コメント',
                        2 => '当日コメント',
                    };
                    $response['bracket' . $bracket . 'RacerComment' . $key] =
                        $this->formatComment($crawler->filterXPath($xpath)->text());
                }
            }
        }

        return $response;
    }
}
