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
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->normalize($comments['.comment_text'][$bracket - 1]);
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
        $baseUrl = 'https://boatrace-amagasaki.jp';
        $crawlerFormat = '%s/modules/yosou/group-yosou.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.z_sinnyu > .sinnyu_zlist',
            '.z_focus > .focus_zlist > li',
            '.z_comment',
            '.j_sinnyu > .sinnyu_jlist',
            '.j_focus > .focus_jlist > li',
            '.j_reliability',
            '.c_focus > .sinnyu_clist',
            '.c_reliability > .cyosou_cmt',
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
        $jlcYesterdayCourseLabel = 'JLC予想 前日コース';
        $jlcYesterdayFocusLabel = 'JLC予想 前日フォーカス';
        $jlcYesterdayReliabilityLabel = 'JLC予想 前日信頼度';
        $reporterTodayCourseLabel = '記者予想 当日コース';
        $reporterTodayCommentLabel = '記者予想 当日コメント';

        $reporterYesterdayCourse = $this->normalize($forecasts['.z_sinnyu > .sinnyu_zlist'][0]);
        $reporterYesterdayFocus = $this->normalizeArray($forecasts['.z_focus > .focus_zlist > li']);
        $reporterYesterdayComment = $this->normalize($forecasts['.z_comment'][0]);
        $jlcYesterdayCourse = $this->normalize($forecasts['.j_sinnyu > .sinnyu_jlist'][0]);
        $jlcYesterdayFocus = $this->normalizeArray($forecasts['.j_focus > .focus_jlist > li']);
        $jlcYesterdayReliability = $this->normalize($forecasts['.j_reliability'][0]);
        $reporterTodayCourse = $this->normalize($forecasts['.c_focus > .sinnyu_clist'][0]);
        $reporterTodayComment = $this->normalize($forecasts['.c_reliability > .cyosou_cmt'][0]);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'jlc_yesterday_course_label' => $jlcYesterdayCourseLabel,
            'jlc_yesterday_course' => $jlcYesterdayCourse,
            'jlc_yesterday_focus_label' => $jlcYesterdayFocusLabel,
            'jlc_yesterday_focus' => $jlcYesterdayFocus,
            'jlc_yesterday_reliability_label' => $jlcYesterdayReliabilityLabel,
            'jlc_yesterday_reliability' => $jlcYesterdayReliability,
            'reporter_today_course_label' => $reporterTodayCourseLabel,
            'reporter_today_course' => $reporterTodayCourse,
            'reporter_today_comment_label' => $reporterTodayCommentLabel,
            'reporter_today_comment' => $reporterTodayComment,
        ];
    }
}
