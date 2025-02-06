<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException;
use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium21 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-ashiya.com';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
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
        $baseUrl = 'https://www.boatrace-ashiya.com';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d&kind=0&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.com-rname', '.col10']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($comments['.com-rname'][$bracket - 1] ?? '');
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->normalize($comments['.col10'][$bracket] ?? '');
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
        $baseUrl = 'https://www.boatrace-ashiya.com';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.z_sinnyu',
            '.z_comment',
            '.z_focus_3ren > .focus_list > li',
            '.z_focus_2ren > .focus_list > li',
            '.j_focus > .focus_list > li',
            '.j_reliability',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $reporterYesterdayCourseLabel = '記者予想 前日コース';
        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayFocusTrifectaLabel = '記者予想 前日フォーカス 3連単';
        $reporterYesterdayFocusExactaLabel = '記者予想 前日フォーカス 2連単';
        $jlcYesterdayFocusLabel = 'JLC予想 前日フォーカス';
        $jlcYesterdayReliabilityLabel = 'JLC予想 前日信頼度';

        $reporterYesterdayCourse = $this->normalize($forecasts['.z_sinnyu'][0]);
        $reporterYesterdayComment = $this->normalize($forecasts['.z_comment'][0]);
        $reporterYesterdayFocus = $this->normalizeArray($forecasts['.z_focus_3ren > .focus_list > li']);
        $reporterYesterdayFocusTrifecta = $this->normalizeArray($forecasts['.z_focus_3ren > .focus_list > li']);
        $reporterYesterdayFocusExacta = $this->normalizeArray($forecasts['.z_focus_2ren > .focus_list > li']);
        $jlcYesterdayFocus = $this->normalizeArray($forecasts['.j_focus > .focus_list > li']);
        $jlcYesterdayReliability = $this->normalize($forecasts['.j_reliability'][0]);

        return [
            'reporter_yesterday_course_label' => $reporterYesterdayCourseLabel,
            'reporter_yesterday_course' => $reporterYesterdayCourse,
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_focus_trifecta_label' => $reporterYesterdayFocusTrifectaLabel,
            'reporter_yesterday_focus_trifecta' => $reporterYesterdayFocusTrifecta,
            'reporter_yesterday_focus_exacta_label' => $reporterYesterdayFocusExactaLabel,
            'reporter_yesterday_focus_exacta' => $reporterYesterdayFocusExacta,
            'jlc_yesterday_focus_label' => $jlcYesterdayFocusLabel,
            'jlc_yesterday_focus' => $jlcYesterdayFocus,
            'jlc_yesterday_reliability_label' => $jlcYesterdayReliabilityLabel,
            'jlc_yesterday_reliability' => $jlcYesterdayReliability,
        ];
    }
}
