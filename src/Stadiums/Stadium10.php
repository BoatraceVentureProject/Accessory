<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Boatrace\Venture\Project\Converter;
use Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException;
use Carbon\CarbonImmutable as Carbon;
use Carbon\CarbonInterface;

/**
 * @author shimomo
 */
class Stadium10 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function times(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $response = [];

        $carbonDate = Carbon::parse($date ?? 'today');
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d&kind=2&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $carbonDate->format('Ymd'), $raceCode);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col5',
            '.col6',
            '.col7',
            '.col8',
        ]);

        foreach (range(1, 6) as $boatNumber) {
            $racerName = $this->removeSpace($times['.com-rname'][$boatNumber - 1] ?? '');
            $racerExhibitionTime = Converter::float($times['.col5'][$boatNumber] ?? 0.0);
            $racerLapTime = Converter::float($times['.col6'][$boatNumber] ?? 0.0);
            $racerTurnTime = Converter::float($times['.col7'][$boatNumber] ?? 0.0);
            $racerStraightTime = Converter::float($times['.col8'][$boatNumber] ?? 0.0);

            $response['boat_number_' . $boatNumber . '_racer_name'] = $racerName;
            $response['boat_number_' . $boatNumber . '_racer_exhibition_time'] = $racerExhibitionTime;
            $response['boat_number_' . $boatNumber . '_racer_lap_time'] = $racerLapTime;
            $response['boat_number_' . $boatNumber . '_racer_turn_time'] = $racerTurnTime;
            $response['boat_number_' . $boatNumber . '_racer_straight_time'] = $racerStraightTime;
        }

        return $response;
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function comments(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $response = [];

        $carbonDate = Carbon::parse($date ?? 'today');
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $carbonDate->format('Ymd'), $raceCode);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $comments = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col10',
        ]);

        foreach (range(1, 6) as $boatNumber) {
            $racerName = $comments['.com-rname'][$boatNumber - 1];
            $racerName = $this->removeSpace($racerName);

            $racerYesterdayCommentLabel = '前日コメント';
            $racerYesterdayComment = $comments['.col10'][$boatNumber];
            $racerYesterdayComment = preg_split('/過去コメント/u', $racerYesterdayComment);
            $racerYesterdayComment = $this->normalize($racerYesterdayComment[0] ?? '');

            $response['boat_number_' . $boatNumber . '_racer_name'] = $racerName;
            $response['boat_number_' . $boatNumber . '_racer_yesterday_comment_label'] = $racerYesterdayCommentLabel;
            $response['boat_number_' . $boatNumber . '_racer_yesterday_comment'] = $racerYesterdayComment;
        }

        return $response;
    }

    /**
     * @param  string|int                           $raceCode
     * @param  \Carbon\CarbonInterface|string|null  $date
     * @return array
     */
    public function forecasts(string|int $raceCode, CarbonInterface|string|null $date = null): array
    {
        $carbonDate = Carbon::parse($date ?? 'today');

        return array_merge(...[
            $this->fetchYesterdayForecasts($raceCode, $carbonDate),
            $this->fetchTodayForecasts($raceCode, $carbonDate),
        ]);
    }

    /**
     * @param  string|int               $raceCode
     * @param  \Carbon\CarbonInterface  $carbonDate
     * @return array
     */
    private function fetchYesterdayForecasts(string|int $raceCode, CarbonInterface $carbonDate): array
    {
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-syussou.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $carbonDate->format('Ymd'), $raceCode);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.z_focus > .focus_list > li',
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

        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayFocus = $this->normalizeArray($forecasts['.z_focus > .focus_list > li']);
        $jlcYesterdayFocusLabel = 'JLC予想 前日フォーカス';
        $jlcYesterdayFocus = $this->normalizeArray($forecasts['.j_focus > .focus_list > li']);
        $jlcYesterdayReliabilityLabel = 'JLC予想 前日信頼度';
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

    /**
     * @param  string|int               $raceCode
     * @param  \Carbon\CarbonInterface  $carbonDate
     * @return array
     */
    private function fetchTodayForecasts(string|int $raceCode, CarbonInterface $carbonDate): array
    {
        $baseUrl = 'https://www.boatrace-mikuni.jp';
        $crawlerFormat = '%s/modules/yosou/group-cyokuzen.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $carbonDate->format('Ymd'), $raceCode);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.cyosou_cmt',
            '.cyosou_focus',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $reporterTodayCommentLabel = '記者予想 当日コメント';
        $reporterTodayComment = $this->normalize($forecasts['.cyosou_cmt'][0]);
        $reporterTodayFocusLabel = '記者予想 当日フォーカス';
        $reporterTodayFocus = array_values(array_filter($this->normalizeArray(
            preg_split('/\s+/u', str_replace('＜フォーカス＞', '', $forecasts['.cyosou_focus'][0]))
        )));

        return [
            'reporter_today_comment_label' => $reporterTodayCommentLabel,
            'reporter_today_comment' => $reporterTodayComment,
            'reporter_today_focus_label' => $reporterTodayFocusLabel,
            'reporter_today_focus' => $reporterTodayFocus,
        ];
    }
}
