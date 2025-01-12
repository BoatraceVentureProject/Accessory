<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium11 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-biwako.jp';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?day=%s&race=%d&if=1&kind=2';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col5',
            '.col6',
            '.col7',
            '.col8',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($times['.col5'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($times['.col6'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($times['.col7'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_straight_time'] = (float) ($times['.col8'][$bracket] ?? 0);
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
