<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium22 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-fukuoka.com';
        $crawlerFormat = '%s/modules/yosou/tenji_info.php?day=%s&race=%d&if=1&nowmode=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col6',
            '.col7',
            '.col8',
            '.col9',
        ]);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($times['.com-rname'][$bracket - 1] ?? '');
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($times['.col6'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($times['.col7'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($times['.col8'][$bracket] ?? 0);
            $response['bracket_' . $bracket . '_straight_time'] = (float) ($times['.col9'][$bracket] ?? 0);
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
        $baseUrl = 'https://www.boatrace-fukuoka.com';
        $crawlerFormat = '%s/modules/yosou/syussou.php?day=%s&race=%d&if=1&nowmode=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.com-rname', '.box']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($comments['.com-rname'][$bracket - 1] ?? '');
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->normalize($comments['.box'][$bracket * 2 - 1] ?? '');
        }

        return $response;
    }

    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function forecasts(int $raceNumber, ?string $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');

        return array_merge(...[
            $this->fetchYesterdayForecasts($raceNumber, $date),
            $this->fetchTodayForecasts($raceNumber, $date),
        ]);
    }

    /**
     * @param  int     $raceNumber
     * @param  string  $date
     * @return array
     */
    protected function fetchYesterdayForecasts(int $raceNumber, string $date): array
    {
        $baseUrl = 'https://www.boatrace-fukuoka.com';
        $crawlerFormat = '%s/modules/yosou/syussou.php?day=%s&race=%d&if=1&nowmode=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.sinnyu',
            '.yComment > tr:nth-child(2) > td',
            '.jishindo > tr:nth-child(2) > td',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $courses = explode(' ', $forecasts['.sinnyu'][0]);
        if (($position = strrpos($courses[2], 'S')) !== false) {
            $courses[1] = substr_replace($courses[1], '/', $position + 1, 0);
        }

        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayReliabilityLabel = '記者予想 前日信頼度';

        $reporterYesterdayCourse = $this->normalize($courses[1]);
        $reporterYesterdayComment = $this->normalize($forecasts['.yComment > tr:nth-child(2) > td'][0]);
        $reporterYesterdayReliability = $this->normalize($forecasts['.jishindo > tr:nth-child(2) > td'][0]);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'reporter_yesterday_reliability_label' => $reporterYesterdayReliabilityLabel,
            'reporter_yesterday_reliability' => $reporterYesterdayReliability,
        ];
    }

    /**
     * @param  int     $raceNumber
     * @param  string  $date
     * @return array
     */
    protected function fetchTodayForecasts(int $raceNumber, string $date): array
    {
        $baseUrl = 'https://www.boatrace-fukuoka.com';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?day=%s&race=%d&if=1&nowmode=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.cComment__title',
            '.cComment__come',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $focus = [];
        $focusIndex = 0;
        $crawler->filter('.cComment__num')->each(function ($node) use (&$focus, &$focusIndex) {
            $node->filter('img, span')->each(function ($node) use (&$focus, &$focusIndex) {
                $focus[$focusIndex] ??= '';
                $focus[$focusIndex] .= $node->nodeName() === 'img' ? '-' : $node->text();

                if (trim($node->getNode(0)?->nextSibling?->textContent ?? '') === "\u{3000}") {
                    $focusIndex++;
                }
            });

            $focusIndex++;
        });

        if (empty($focus)) {
            throw new AccessoryNotFoundException(
                'No data found for key \'.cComment__num > img, .cComment__num > span\' at \'' . $crawlerUrl . '\'.'
            );
        }

        $reporterTodayCommentLabel = '記者予想 当日コメント';
        $reporterTodayFocusLabel = '記者予想 当日フォーカス';

        $reporterTodayComment = $this->normalize(implode('', array_map('implode', $forecasts)));
        $reporterTodayFocus = $this->normalizeArray(array_values($focus));

        return [
            'reporter_today_comment_label' => $reporterTodayCommentLabel,
            'reporter_today_comment' => $reporterTodayComment,
            'reporter_today_focus_label' => $reporterTodayFocusLabel,
            'reporter_today_focus' => $reporterTodayFocus,
        ];
    }
}
