<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium04 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.heiwajima.gr.jp';
        $crawlerFormat = '%s/asp/kyogi/04/pc/yoso05%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[1]/table[1]';
        $racerNameFormat = '%s/tbody[%d]/tr[%d]/td[2]/ul/li[1]/a';
        $timeFormat = '%s/tbody[%d]/tr[%d]/td[%d]';

        foreach (range(1, 6) as $bracket) {
            $absenceKey = 0;

            foreach (range(1, 2) as $absence) {
                $xpath = sprintf($racerNameFormat, $baseXpath, $bracket, $absence);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response['bracket' . $bracket . 'RacerName'] =
                        $this->removeSpace($crawler->filterXPath($xpath)->text());

                    if ($absence === 2) {
                        $absenceKey = 1;
                    }
                }
            }

            foreach (range(3, 6) as $key) {
                $xpath = sprintf($timeFormat, $baseXpath, $bracket, 1 + $absenceKey, $key);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response[
                        match ($key) {
                            3 => 'bracket' . $bracket . 'LapTime',
                            4 => 'bracket' . $bracket . 'TurnTime',
                            5 => 'bracket' . $bracket . 'StraightTime',
                            6 => 'bracket' . $bracket . 'ExhibitionTime',
                        }
                    ] = (float) $crawler->filterXPath($xpath)->text();
                }
            }

            foreach (range(1, 3) as $key) {
                $xpath = sprintf($timeFormat, $baseXpath, $bracket, 2 + $absenceKey, $key);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response[
                        match ($key) {
                            1 => 'bracket' . $bracket . 'LapTimeSpeed',
                            2 => 'bracket' . $bracket . 'TurnTimeSpeed',
                            3 => 'bracket' . $bracket . 'StraightTimeSpeed',
                        }
                    ] = (float) $crawler->filterXPath($xpath)->text();
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
        return [];
    }
}
