<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;
use InvalidArgumentException;

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
            try {
                $xpath = sprintf($racerNameFormat, $bracket);
                if ($crawler->filterXPath($xpath)->count()) {
                    $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(
                        $crawler->filterXPath($xpath)->text()
                    );
                }

                foreach (['ttime', 'rnd', 'cnr', 'str'] as $key) {
                    $xpath = sprintf($timeFormat, $bracket, $key);
                    if ($crawler->filterXPath($xpath)->count()) {
                        $response[
                            match ($key) {
                                'ttime' => 'bracket_' . $bracket . '_exhibition_time',
                                'rnd' => 'bracket_' . $bracket . '_lap_time',
                                'cnr' => 'bracket_' . $bracket . '_turn_time',
                                'str' => 'bracket_' . $bracket . '_straight_time',
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
