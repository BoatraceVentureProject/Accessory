<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;
use InvalidArgumentException;

/**
 * @author shimomo
 */
class Stadium12 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $baseUrl = 'https://www.boatrace-suminoe.jp';
        $crawlerFormat = '%s/asp/kyogi/12/pc/st02%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[1]/table[1]';
        $racerNameFormat = '%s/tbody[%d]/tr[1]/td[2]/ul/li[2]/a';
        $timeFormat = '%s/tbody[%d]/tr[1]/td[%d]';

        foreach (range(1, 6) as $bracket) {
            try {
                $xpath = sprintf($racerNameFormat, $baseXpath, $bracket);
                $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(
                    $crawler->filterXPath($xpath)->text()
                );

                foreach (range(5, 7) as $key) {
                    $xpath = sprintf($timeFormat, $baseXpath, $bracket, $key);
                    $response[
                        match ($key) {
                            5 => 'bracket_' . $bracket . '_exhibition_time',
                            6 => 'bracket_' . $bracket . '_lap_time',
                            7 => 'bracket_' . $bracket . '_turn_time',
                        }
                    ] = (float) $crawler->filterXPath($xpath)->text();
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
