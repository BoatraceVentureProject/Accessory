<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Boatrace\Venture\Project\Exceptions\AccessoryNotFoundException;
use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class Stadium05 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://boatrace-tamagawa.com';
        $crawlerFormat = '%s/modules/yosou/oriten.php?day=%s&race=%d&jo=05&if=1';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByKeys($crawler, [
            '.com-rname',
            '.col6',
            '.col7',
            '.col8',
            '.col9',
        ]);

        foreach (range(1, 6) as $boat_number) {
            $response['boat_number_' . $boat_number . '_racer_name'] = $this->removeSpace($times['.com-rname'][$boat_number - 1] ?? '');
            $response['boat_number_' . $boat_number . '_exhibition_time'] = (float) ($times['.col6'][$boat_number] ?? 0);
            $response['boat_number_' . $boat_number . '_lap_time'] = (float) ($times['.col7'][$boat_number] ?? 0);
            $response['boat_number_' . $boat_number . '_turn_time'] = (float) ($times['.col8'][$boat_number] ?? 0);
            $response['boat_number_' . $boat_number . '_straight_time'] = (float) ($times['.col9'][$boat_number] ?? 0);
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
        $baseUrl = 'https://boatrace-tamagawa.com';
        $crawlerFormat = '%s/modules/yosou/syussou.php?day=%s&race=%d&jo=05';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $forecasts = $this->filterByKeys($crawler, [
            '.z_sinnyu',
            '.z_focus_2ren > .focus_list > li',
            '.z_focus_3ren > .focus_list > li',
            '.z_comment',
            '.j_sinnyu',
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

        return [
            'reporter_yesterday_course_label' => '記者予想 前日コース',
            'reporter_yesterday_course' => $this->normalize($forecasts['.z_sinnyu'][0]),
            'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
            'reporter_yesterday_focus_exacta' => $this->normalizeArray($forecasts['.z_focus_2ren > .focus_list > li']),
            'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
            'reporter_yesterday_focus_trifecta' => $this->normalizeArray($forecasts['.z_focus_3ren > .focus_list > li']),
            'reporter_yesterday_comment_label' => '記者予想 前日コメント',
            'reporter_yesterday_comment' => $this->normalize($forecasts['.z_comment'][0]),
            'jlc_yesterday_course_label' => 'JLC予想 前日コース',
            'jlc_yesterday_course' => $this->normalize($forecasts['.j_sinnyu'][0]),
            'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
            'jlc_yesterday_focus' => $this->normalizeArray($forecasts['.j_focus > .focus_list > li']),
            'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
            'jlc_yesterday_reliability' => $this->normalize($forecasts['.j_reliability'][0]),
        ];
    }
}
