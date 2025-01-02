<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium02 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-toda.jp';
        $crawlerFormat = '%s/xml/kaisai/%s/race_table_original_%02d.xml';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->xmlHttpRequest('GET', $crawlerUrl);
        $racerNameFormat = 'descendant-or-self::record[%d]/name';
        $timeFormat = 'descendant-or-self::record[%d]/%s';

        foreach (range(1, 6) as $bracket) {
            $xpath = sprintf($racerNameFormat, $bracket);
            if ($crawler->filterXPath($xpath)->count()) {
                $response['bracket' . $bracket . 'RacerName'] =
                    $this->removeSpace($crawler->filterXPath($xpath)->text());
            }

            foreach (['ttime', 'rnd', 'cnr', 'str'] as $key) {
                $xpath = sprintf($timeFormat, $bracket, $key);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response[
                        match ($key) {
                            'ttime' => 'bracket' . $bracket . 'ExhibitionTime',
                            'rnd' => 'bracket' . $bracket . 'LapTime',
                            'cnr' => 'bracket' . $bracket . 'TurnTime',
                            'str' => 'bracket' . $bracket . 'StraightTime',
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
