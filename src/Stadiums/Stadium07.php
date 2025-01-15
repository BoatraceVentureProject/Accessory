<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;
use Peast\Peast;

/**
 * @author shimomo
 */
class Stadium07 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.gamagori-kyotei.com';
        $crawlerFormat = '%s/asp/gamagori/kyogi/kyogihtml/time/time%s07%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $times = $this->filterByClassPrefixes($crawler, ['.name', '.score']);
        $chunkTimes = array_chunk($times['.score'], 4);

        foreach (range(1, 6) as $bracket) {
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace($times['.name'][$bracket] ?? '');
            $response['bracket_' . $bracket . '_exhibition_time'] = (float) ($chunkTimes[$bracket][0] ?? 0);
            $response['bracket_' . $bracket . '_lap_time'] = (float) ($chunkTimes[$bracket][1] ?? 0);
            $response['bracket_' . $bracket . '_turn_time'] = (float) ($chunkTimes[$bracket][2] ?? 0);
            $response['bracket_' . $bracket . '_straight_time'] = (float) ($chunkTimes[$bracket][3] ?? 0);
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
        $baseUrl = 'https://www.gamagori-kyotei.com';
        $sourceFormat = '%s/asp/gamagori/kyogi/kyogihtml/js/comment%s07.js';
        $sourceUrl = sprintf($sourceFormat, $baseUrl, $date);
        $source = file_get_contents($sourceUrl);
        $comments = Peast::latest($source)->tokenize();

        $functionName = null;
        $racerNumber = 0;
        $todayComments = [];
        $todayNewComments = [];

        foreach ($comments as $index => $comment) {
            if ($comment->value === 'funcToDayComment') {
                $functionName = 'todayComments';
            }

            if ($comment->value === 'funcToDayNewComment') {
                $functionName = 'todayNewComments';
            }

            if (is_null($functionName)) {
                continue;
            }

            if ($comment->value === 'strTouban') {
                $racerNumber = str_replace('\'', '', $comments[$index + 2]->value);
            }

            if (preg_match('/[\p{Hiragana}\p{Katakana}\p{Han}ー。、]/u', $comment->value)) {
                $$functionName[$racerNumber] = str_replace('\'', '', $comment->value);
            }
        }

        $crawlerFormat = '%s/asp/gamagori/kyogi/kyogihtml/comment/comment%s07%02d.htm';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $date, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $racers = $this->filterByClassPrefixes($crawler, ['.name', '.number']);

        foreach (range(1, 6) as $bracket) {
            $racerNumber = (int) ($racers['.number'][$bracket - 1] ?? 0);
            $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(
                $racers['.name'][$bracket] ?? ''
            );

            if (isset($todayComments[$racerNumber])) {
                $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
                $response['bracket_' . $bracket . '_racer_comment_1'] = $this->normalize(
                    $todayComments[$racerNumber]
                );
            }

            if (isset($todayNewComments[$racerNumber])) {
                $response['bracket_' . $bracket . '_racer_comment_2_label'] = '当日コメント';
                $response['bracket_' . $bracket . '_racer_comment_2'] = $this->normalize(
                    $todayNewComments[$racerNumber]
                );
            }
        }

        return $response;
    }
}
