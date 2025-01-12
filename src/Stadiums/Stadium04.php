<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;
use InvalidArgumentException;

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
            try {
                $absenceKey = 0;

                foreach (range(1, 2) as $absence) {
                    $xpath = sprintf($racerNameFormat, $baseXpath, $bracket, $absence);
                    if ($crawler->filterXPath($xpath)->count()) {
                        $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(
                            $crawler->filterXPath($xpath)->text()
                        );

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
                                3 => 'bracket_' . $bracket . '_lap_time',
                                4 => 'bracket_' . $bracket . '_turn_time',
                                5 => 'bracket_' . $bracket . '_straight_time',
                                6 => 'bracket_' . $bracket . '_exhibition_time',
                            }
                        ] = (float) $crawler->filterXPath($xpath)->text();
                    }
                }

                foreach (range(1, 3) as $key) {
                    $xpath = sprintf($timeFormat, $baseXpath, $bracket, 2 + $absenceKey, $key);
                    if ($crawler->filterXPath($xpath)->count()) {
                        $response[
                            match ($key) {
                                1 => 'bracket_' . $bracket . '_lap_time_speed',
                                2 => 'bracket_' . $bracket . '_turn_time_speed',
                                3 => 'bracket_' . $bracket . '_straight_time_speed',
                            }
                        ] = (float) $crawler->filterXPath($xpath)->text();
                    }
                }
            } catch (InvalidArgumentException $exception) {
                // ToDo: 例外の詳細を保存する機能を実装
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
