<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException;
use Carbon\CarbonImmutable as Carbon;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author shimomo
 */
class Stadium03 extends BaseStadium implements StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array
    {
        return [];
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
        $baseUrl = 'https://boatrace-edogawa.com';
        $crawlerFormat = '%s/modules/yosou/zenjitsu.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '#padtop > div',
            '.jishindo > b',
        ]);

        foreach ($forecasts as $key => $value) {
            if (empty($value)) {
                throw new AccessoryNotFoundException(
                    'No data found for key \'' . $key . '\' at \'' . $crawlerUrl . '\'.'
                );
            }
        }

        $focus = [];
        $focusIndex = 0;
        $crawler->filter('img')->each(function ($node) use (&$focus, &$focusIndex) {
            if (preg_match('/\/images\/icon_num([^\/]+)\.png/u', $node->attr('src'), $matches)) {
                $focus[$focusIndex] ??= '';
                $focus[$focusIndex] .= $matches[1];
                return;
            }

            if (preg_match('/\/images\/equal\.png/u', $node->attr('src'), $matches)) {
                $focus[$focusIndex] ??= '';
                $focus[$focusIndex] .= '=';
                return;
            }

            if (preg_match('/\/images\/fifun\.png/u', $node->attr('src'), $matches)) {
                $focus[$focusIndex] ??= '';
                $focus[$focusIndex] .= '-';
                return;
            }

            $focusIndex++;
        });

        $reporterYesterdayCommentLabel = '記者予想 前日コメント';
        $reporterYesterdayFocusLabel = '記者予想 前日フォーカス';
        $reporterYesterdayFocusTrifectaLabel = '記者予想 前日フォーカス 3連単';
        $reporterYesterdayFocusExactaLabel = '記者予想 前日フォーカス 2連単';
        $reporterYesterdayReliabilityLabel = '記者予想 前日信頼度';

        $reporterYesterdayComment = $this->normalize($forecasts['#padtop > div'][0]);
        $reporterYesterdayFocus = $this->normalizeArray($this->filterFocusByLength($focus, 5));
        $reporterYesterdayFocusTrifecta = $this->normalizeArray($this->filterFocusByLength($focus, 5));
        $reporterYesterdayFocusExacta = $this->normalizeArray($this->filterFocusByLength($focus, 3));
        $reporterYesterdayReliability = rtrim($this->normalize($forecasts['.jishindo > b'][0]), '%') . '%';

        if (empty($reporterYesterdayFocusExacta) || empty($reporterYesterdayFocusTrifecta)) {
            throw new AccessoryNotFoundException(
                'No data found for key \'img\' at \'' . $crawlerUrl . '\'.'
            );
        }

        return [
            'reporter_yesterday_comment_label' => $reporterYesterdayCommentLabel,
            'reporter_yesterday_comment' => $reporterYesterdayComment,
            'reporter_yesterday_focus_label' => $reporterYesterdayFocusLabel,
            'reporter_yesterday_focus' => $reporterYesterdayFocus,
            'reporter_yesterday_focus_trifecta_label' => $reporterYesterdayFocusTrifectaLabel,
            'reporter_yesterday_focus_trifecta' => $reporterYesterdayFocusTrifecta,
            'reporter_yesterday_focus_exacta_label' => $reporterYesterdayFocusExactaLabel,
            'reporter_yesterday_focus_exacta' => $reporterYesterdayFocusExacta,
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
        $baseUrl = 'https://boatrace-edogawa.com';
        $crawlerFormat = '%s/modules/yosou/cyokuzen.php?day=%s&race=%d';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $this->httpBrowser->request('GET', $crawlerUrl);
        $response = $this->httpBrowser->getResponse();
        $content = mb_convert_encoding($response->getContent(), 'EUC-JP', 'UTF-8');
        $crawler = new Crawler($content);

        $forecasts = $this->filterByIdPrefixes($crawler, [
            '#overflowhidden;letter-spacing:0px;',
        ]);

        $pattern = '/\d+[^\d]\d+[^\d]\d+/u';
        $subject = $forecasts['#overflowhidden;letter-spacing:0px;'][0];

        if (($comments = preg_split($pattern, $subject)) === false) {
            throw new AccessoryNotFoundException(
                'No data found for key \'#overflowhidden;letter-spacing:0px;\' at \'' . $crawlerUrl . '\'.'
            );
        }

        if (! preg_match_all($pattern, $subject, $matches)) {
            throw new AccessoryNotFoundException(
                'No data found for key \'#overflowhidden;letter-spacing:0px;\' at \'' . $crawlerUrl . '\'.'
            );
        }

        $reporterTodayCommentLabel = '記者予想 当日コメント';
        $reporterTodayFocusLabel = '記者予想 当日フォーカス';

        $reporterTodayComment = $this->normalize($comments[0]);
        $reporterTodayFocus = $this->normalizeArray($matches[0]);

        return [
            'reporter_today_comment_label' => $reporterTodayCommentLabel,
            'reporter_today_comment' => $reporterTodayComment,
            'reporter_today_focus_label' => $reporterTodayFocusLabel,
            'reporter_today_focus' => $reporterTodayFocus,
        ];
    }

    /**
     * @param  array  $focus
     * @param  int    $length
     * @return array
     */
    protected function filterFocusByLength(array $focus, int $length): array
    {
        return array_values(array_filter($focus, fn($value) => strlen($value) === $length));
    }
}
