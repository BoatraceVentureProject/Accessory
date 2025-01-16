<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium10 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
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
        $response = [];

        $date = Carbon::parse($date ?? 'today')->format('Ymd');
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, ['.com-rname', '.col10']);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($comments['.com-rname'][$bracket - 1]);
            $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
            $response['bracket_' . $bracket . '_racer_comment_1'] = $this->normalize(preg_split('/過去コメント/u', $comments['.col10'][$bracket])[0] ?? '');
        }

        return $response;
    }

    /**
     * @param  int     $raceNumber
     * @param  string  $date
     * @return array
     */
    protected function fetchYesterdayForecasts(int $raceNumber, string $date): array
    {
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.z_focus > .focus_list > li',
            '.j_focus > .focus_list > li',
            '.j_reliability',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new \Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $jlcYesterdayFocusLabel = 'JLC予想 前日フォーカス';
        $jlcYesterdayReliabilityLabel = 'JLC予想 前日信頼度';

        $reporterYesterdayFocus = $this->normalizeArray($forecasts['.z_focus > .focus_list > li']);
        $jlcYesterdayFocus = $this->normalizeArray($forecasts['.j_focus > .focus_list > li']);
        $jlcYesterdayReliability = $this->normalize($forecasts['.j_reliability'][0]);

        return [
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'jlc_yesterday_focus_label' => $jlcYesterdayFocusLabel,
            'jlc_yesterday_focus' => $jlcYesterdayFocus,
            'jlc_yesterday_reliability_label' => $jlcYesterdayReliabilityLabel,
            'jlc_yesterday_reliability' => $jlcYesterdayReliability,
        ];
    }
}
