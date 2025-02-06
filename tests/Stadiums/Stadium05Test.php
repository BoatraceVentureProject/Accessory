<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium05;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium05Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium05
     */
    protected Stadium05 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium05(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('相原利章', $response['bracket_1_racer_name']);
        $this->assertSame(6.70, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.47, $response['bracket_1_lap_time']);
        $this->assertSame(6.07, $response['bracket_1_turn_time']);
        $this->assertSame(6.47, $response['bracket_1_straight_time']);
        $this->assertSame('橋口真樹', $response['bracket_2_racer_name']);
        $this->assertSame(6.66, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.97, $response['bracket_2_lap_time']);
        $this->assertSame(6.03, $response['bracket_2_turn_time']);
        $this->assertSame(6.68, $response['bracket_2_straight_time']);
        $this->assertSame('青木蓮', $response['bracket_3_racer_name']);
        $this->assertSame(6.66, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.70, $response['bracket_3_lap_time']);
        $this->assertSame(5.63, $response['bracket_3_turn_time']);
        $this->assertSame(6.93, $response['bracket_3_straight_time']);
        $this->assertSame('佐藤航', $response['bracket_4_racer_name']);
        $this->assertSame(6.65, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.44, $response['bracket_4_lap_time']);
        $this->assertSame(5.67, $response['bracket_4_turn_time']);
        $this->assertSame(6.87, $response['bracket_4_straight_time']);
        $this->assertSame('田中勇輔', $response['bracket_5_racer_name']);
        $this->assertSame(6.68, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.06, $response['bracket_5_lap_time']);
        $this->assertSame(5.57, $response['bracket_5_turn_time']);
        $this->assertSame(6.82, $response['bracket_5_straight_time']);
        $this->assertSame('坂本一真', $response['bracket_6_racer_name']);
        $this->assertSame(6.72, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.37, $response['bracket_6_lap_time']);
        $this->assertSame(5.93, $response['bracket_6_turn_time']);
        $this->assertSame(6.71, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-01-03');
        $this->assertSame('尾上雅也', $response['bracket_1_racer_name']);
        $this->assertSame(6.74, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.66, $response['bracket_1_lap_time']);
        $this->assertSame(5.81, $response['bracket_1_turn_time']);
        $this->assertSame(6.70, $response['bracket_1_straight_time']);
        $this->assertSame('川上聡介', $response['bracket_2_racer_name']);
        $this->assertSame(6.66, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.03, $response['bracket_2_lap_time']);
        $this->assertSame(6.09, $response['bracket_2_turn_time']);
        $this->assertSame(6.82, $response['bracket_2_straight_time']);
        $this->assertSame('相原利章', $response['bracket_3_racer_name']);
        $this->assertSame(6.83, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.27, $response['bracket_3_lap_time']);
        $this->assertSame(6.21, $response['bracket_3_turn_time']);
        $this->assertSame(6.71, $response['bracket_3_straight_time']);
        $this->assertSame('塚田修二', $response['bracket_4_racer_name']);
        $this->assertSame(6.63, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.08, $response['bracket_4_lap_time']);
        $this->assertSame(5.72, $response['bracket_4_turn_time']);
        $this->assertSame(6.80, $response['bracket_4_straight_time']);
        $this->assertSame('小澤和也', $response['bracket_5_racer_name']);
        $this->assertSame(6.80, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.23, $response['bracket_5_lap_time']);
        $this->assertSame(5.70, $response['bracket_5_turn_time']);
        $this->assertSame(6.95, $response['bracket_5_straight_time']);
        $this->assertSame('倉田茂将', $response['bracket_6_racer_name']);
        $this->assertSame(6.81, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.70, $response['bracket_6_lap_time']);
        $this->assertSame(5.59, $response['bracket_6_turn_time']);
        $this->assertSame(6.92, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 10, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber1AndDate20240103(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['1=3', '1-4'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['1=3-4', '1-4-3'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('開幕戦地元①相原利の逃げに懸ける。S奮起押し切るか。③青木蓮の25号機前回ターン系に好気配。握れる位置なら1M有利に行けそう。④佐藤航はそれを待つ形。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日コース', $response['jlc_yesterday_course_label']);
        $this->assertSame('123456', $response['jlc_yesterday_course']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['1-3-2', '1-2-3', '1-3-4', '1-2-4', '1-4-3'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('55%', $response['jlc_yesterday_reliability']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber10AndDate20240103(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 10, date: '2024-01-03');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['1=3'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['1-3=4', '1-3=2'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('③相原利のスタート力は侮れないが、①尾上雅も先に回れるぐらいには踏み込むとみる。ますはこの先マイ。相原を見て④塚田修がまくり差す。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日コース', $response['jlc_yesterday_course_label']);
        $this->assertSame('126345', $response['jlc_yesterday_course']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['1-3-4', '1-4-3', '1-3-2', '1-4-2', '1-2-3'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('80%', $response['jlc_yesterday_reliability']);
    }
}
