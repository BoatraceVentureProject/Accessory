<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium06 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'http://www.boatrace-hamanako.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.com-rname', '.col5', '.col6', '.col7', '.col8']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket' . $bracket . 'ExhibitionTime'] = (float) ($times['.col5'][$bracket] ?? 0);
            $response['bracket' . $bracket . 'LapTime'] = (float) ($times['.col6'][$bracket + 3] ?? 0);
            $response['bracket' . $bracket . 'TurnTime'] = (float) ($times['.col7'][$bracket - 1] ?? 0);
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
        $baseUrl = 'https://www.boatrace-hamanako.jp';
        $crawlerFormat = '%s/modules/yosou/group-yosou.php?day=%s&race=%d&kind=1&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKey($crawler, '.tbl_cyokuzen_comment > tbody > tr > td');

        foreach (range(1, 6) as $bracket) {
            $response['bracket' . $bracket . 'RacerName'] =
                $this->removeNonJapanese($comments[$bracket * 5 - 5] ?? '');
            $response['bracket' . $bracket . 'RacerComment1Label'] = '前日コメント';
            $response['bracket' . $bracket . 'RacerComment1'] =
                $this->formatComment($comments[$bracket * 5 - 3] ?? '');
            $response['bracket' . $bracket . 'RacerComment2Label'] =
                $this->formatComment($comments[$bracket * 5 - 2] ?? '');
            $response['bracket' . $bracket . 'RacerComment2'] =
                $this->formatComment($comments[$bracket * 5 - 1] ?? '');
        }

        return $response;
    }
}
