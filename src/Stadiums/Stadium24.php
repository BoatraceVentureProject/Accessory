<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium24 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://omurakyotei.jp';
        $crawlerFormat = '%s/yosou/include/new_top_iframe_chokuzen_2.php?day=%s&race=1&race=%02d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.tei1',
            '.tei2',
            '.tei3',
            '.tei4',
            '.tei5',
            '.tei6',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($times['.tei' . $bracket][1] ?? '');
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($times['.tei' . $bracket][3] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($times['.tei' . $bracket][4] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($times['.tei' . $bracket][5] ?? 0);
            $response['bracket_' . $bracket . '_straight_time'] = (float) ($times['.tei' . $bracket][6] ?? 0);
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
        $baseUrl = 'https://omurakyotei.jp';
        $crawlerFormat = '%s/yosou/include/new_top_iframe_comment_2.php?day=%s&race=1&race=%02d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, [
            '.tei1',
            '.tei2',
            '.tei3',
            '.tei4',
            '.tei5',
            '.tei6',
        ]);

        foreach (range(1, 6) as $bracket) {
            $pattern = '/(.+)(\(当日気配\).+)/u';
            $subject = $comments['.tei' . $bracket][2] ?? '';
            preg_match($pattern, $subject, $matches);

            if (count($matches) === 0) {
                $matches[1] = $subject;
            }

            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($comments['.tei' . $bracket][1] ?? '');
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->formatComment($matches[1]);

            if (count($matches) >= 3) {
                $response['bracket_' . $bracket . '_racer_comment_2_label'] = '当日コメント';
                $response['bracket_' . $bracket . '_racer_comment_2'] = $this->formatComment($matches[2]);
            }
        }

        return $response;
    }
}
