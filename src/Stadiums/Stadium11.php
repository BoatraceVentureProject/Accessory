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

    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function forecasts(int $raceNumber, ?string $date = null): array
    {
        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://www.boatrace-biwako.jp';
        $crawlerFormat = '%s/modules/yosou/syussou.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.sinnyu-div > ul > .num',
            '.comment-div',
            '.focus > li',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayCommentLabel = '記者予想 前日コメント';

        $reporterYesterdayCourse = $this->normalize(implode($forecasts['.sinnyu-div > ul > .num']));
        $reporterYesterdayFocus = $this->normalizeArray($forecasts['.focus > li']);
        $reporterYesterdayComment = $this->normalize($forecasts['.comment-div'][0]);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
        ];
    }
}
