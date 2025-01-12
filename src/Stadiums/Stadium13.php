<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium13 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://boatrace-amagasaki.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col5',
            '.col6',
            '.col7',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($times['.col5'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($times['.col6'][$bracket + 2] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($times['.col7'][$bracket - 1] ?? 0);
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
        $baseUrl = 'https://boatrace-amagasaki.jp';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.com-rname', '.comment_text']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($comments['.com-rname'][$bracket - 1]);
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->formatComment($comments['.comment_text'][$bracket - 1]);
        }

        return $response;
    }
}
