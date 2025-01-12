<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Stadiums;

use Carbon\CarbonImmutable as Carbon;
use InvalidArgumentException;

/**
 * @author shimomo
 */
class Stadium15 extends BaseStadium implements StadiumInterface
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
        $baseUrl = 'https://www.marugameboat.jp';
        $crawlerFormat = '%s/asp/kyogi/15/pc/yoso05%02d.htm?slide=2';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[2]/div/div/div[3]/table';
        $racerNameFormat = '%s/tbody[%d]/tr[%d]/td[2]/div/div/div[2]/div[2]/a';
        $timeFormat = '%s/tbody[%d]/tr[%d]/td[%d]';

        foreach (range(1, 6) as $bracket) {
            try {
                foreach (range(1, 2) as $absence) {
                    $xpath = sprintf($racerNameFormat, $baseXpath, $bracket, $absence);
                    if ($crawler->filterXPath($xpath)->count()) {
                        $response['bracket_' . $bracket . '_racer_name'] = $this->removeSpace(
                            $crawler->filterXPath($xpath)->text()
                        );
                    }
                }

                foreach (range(5, 8) as $key) {
                    foreach (range(1, 2) as $absence) {
                        $xpath = sprintf($timeFormat, $baseXpath, $bracket, $absence, $key);
                        if ($crawler->filterXPath($xpath)->count()) {
                            $response[
                                match ($key) {
                                    5 => 'bracket_' . $bracket . '_exhibition_time',
                                    6 => 'bracket_' . $bracket . '_lap_time',
                                    7 => 'bracket_' . $bracket . '_turn_time',
                                    8 => 'bracket_' . $bracket . '_straight_time',
                                }
                            ] = (float) $crawler->filterXPath($xpath)->text();
                        }
                    }
                }
            } catch (InvalidArgumentException $exception) {
                // ToDo: 例外の詳細を保存する機能を実装
            }
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
        $baseUrl = 'https://www.marugameboat.jp';
        $crawlerFormat = '%s/asp/kyogi/15/pc/yoso05%02d.htm?slide=3';
        $crawlerUrl = sprintf($crawlerFormat, $baseUrl, $raceNumber);
        $crawler = $this->httpBrowser->request('GET', $crawlerUrl);
        $baseXpath = 'descendant-or-self::body/div[2]/div/div';
        $racerNameFormat = '%s/div[3]/table/tbody[%d]/tr[1]/td[2]/div/div/div[2]/div[2]/a';
        $racerComment1Format = '%s/div[4]/table/tbody[%d]/tr/td[3]/p[2]';
        $racerComment2Format = '%s/div[4]/table/tbody[%d]/tr/td[3]/p[1]';

        foreach (range(1, 6) as $bracket) {
            try {
                $response['bracket_' . $bracket . '_racer_name'] =
                    $this->removeSpace($crawler->filterXPath(
                        sprintf($racerNameFormat, $baseXpath, $bracket)
                    )->text());

                $response['bracket_' . $bracket . '_racer_comment_1_label'] = '前日コメント';
                $response['bracket_' . $bracket . '_racer_comment_1'] =
                    preg_replace('/\A前日/u', '', $this->formatComment($crawler->filterXPath(
                        sprintf($racerComment1Format, $baseXpath, $bracket)
                    )->text()));

                $response['bracket_' . $bracket . '_racer_comment_2_label'] = '当日コメント';
                $response['bracket_' . $bracket . '_racer_comment_2'] =
                    preg_replace('/\A当日/u', '', $this->formatComment($crawler->filterXPath(
                        sprintf($racerComment2Format, $baseXpath, $bracket)
                    )->text()));
            } catch (InvalidArgumentException $exception) {
                // ToDo: 例外の詳細を保存する機能を実装
            }
        }

        return $response;
    }
}
