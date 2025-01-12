<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium08 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        $response = [];

        $baseUrl = 'https://www.boatrace-tokoname.jp';
        $crawlerFormat = '%s/raceguide/kyogi15/%d/';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, ['.racer', '.time']);
        $chunkTimes = array_chunk($times['.time'], 4);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = preg_split('/\d{4}/u', $this->removeSpace($times['.racer'][$bracket - 1] ?? ''))[0];
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($chunkTimes[$bracket - 1][0] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($chunkTimes[$bracket - 1][1] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($chunkTimes[$bracket - 1][2] ?? 0);
            $response['bracket_' . $bracket . '_straight_time'] = (float) ($chunkTimes[$bracket - 1][3] ?? 0);
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

        $baseUrl = 'https://www.boatrace-tokoname.jp';
        $crawlerFormat = '%s/raceguide/kyogi13/%d/';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.racer', '.r_come']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(preg_split('/\d{4}/u', $comments['.racer'][$bracket - 1] ?? '')[0] ?? '');
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->formatComment($comments['.r_come'][$bracket - 1] ?? '');
        }

        return $response;
    }
}
