<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium16;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium16Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium16
     */
    protected Stadium16 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium16(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('浮田圭浩', $response['bracket_1_racer_name']);
        $this->assertSame(6.70, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.87, $response['bracket_1_lap_time']);
        $this->assertSame(5.85, $response['bracket_1_turn_time']);
        $this->assertSame(6.53, $response['bracket_1_straight_time']);
        $this->assertSame('阪本勇介', $response['bracket_2_racer_name']);
        $this->assertSame(6.64, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.63, $response['bracket_2_lap_time']);
        $this->assertSame(5.37, $response['bracket_2_turn_time']);
        $this->assertSame(6.63, $response['bracket_2_straight_time']);
        $this->assertSame('福田理', $response['bracket_3_racer_name']);
        $this->assertSame(6.78, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.92, $response['bracket_3_lap_time']);
        $this->assertSame(5.53, $response['bracket_3_turn_time']);
        $this->assertSame(6.77, $response['bracket_3_straight_time']);
        $this->assertSame('峰重力也', $response['bracket_4_racer_name']);
        $this->assertSame(6.79, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.38, $response['bracket_4_lap_time']);
        $this->assertSame(5.63, $response['bracket_4_turn_time']);
        $this->assertSame(6.67, $response['bracket_4_straight_time']);
        $this->assertSame('立間充宏', $response['bracket_5_racer_name']);
        $this->assertSame(6.72, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.50, $response['bracket_5_lap_time']);
        $this->assertSame(5.60, $response['bracket_5_turn_time']);
        $this->assertSame(6.63, $response['bracket_5_straight_time']);
        $this->assertSame('山下昂大', $response['bracket_6_racer_name']);
        $this->assertSame(6.82, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.70, $response['bracket_6_lap_time']);
        $this->assertSame(5.77, $response['bracket_6_turn_time']);
        $this->assertSame(6.77, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 11, date: '2024-01-01');
        $this->assertSame('藤原啓史朗', $response['bracket_1_racer_name']);
        $this->assertSame(6.80, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.10, $response['bracket_1_lap_time']);
        $this->assertSame(6.30, $response['bracket_1_turn_time']);
        $this->assertSame(6.53, $response['bracket_1_straight_time']);
        $this->assertSame('林祐介', $response['bracket_2_racer_name']);
        $this->assertSame(6.78, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.13, $response['bracket_2_lap_time']);
        $this->assertSame(6.13, $response['bracket_2_turn_time']);
        $this->assertSame(6.57, $response['bracket_2_straight_time']);
        $this->assertSame('岡瀬正人', $response['bracket_3_racer_name']);
        $this->assertSame(6.83, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.93, $response['bracket_3_lap_time']);
        $this->assertSame(5.67, $response['bracket_3_turn_time']);
        $this->assertSame(6.83, $response['bracket_3_straight_time']);
        $this->assertSame('入海馨', $response['bracket_4_racer_name']);
        $this->assertSame(6.79, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.20, $response['bracket_4_lap_time']);
        $this->assertSame(5.90, $response['bracket_4_turn_time']);
        $this->assertSame(6.70, $response['bracket_4_straight_time']);
        $this->assertSame('渡邉和将', $response['bracket_5_racer_name']);
        $this->assertSame(6.77, $response['bracket_5_exhibition_time']);
        $this->assertSame(36.83, $response['bracket_5_lap_time']);
        $this->assertSame(5.67, $response['bracket_5_turn_time']);
        $this->assertSame(6.87, $response['bracket_5_straight_time']);
        $this->assertSame('平尾崇典', $response['bracket_6_racer_name']);
        $this->assertSame(6.72, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.20, $response['bracket_6_lap_time']);
        $this->assertSame(6.13, $response['bracket_6_turn_time']);
        $this->assertSame(6.67, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('浮田圭浩', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('4日目は展開があって3着になれた。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('阪本勇介', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('*8Rは1号艇でスローの4コースとなり3着', $response['bracket_2_racer_comment_1']);
        $this->assertSame('福田理', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('安定板が付いた後半は悪くなかった。乗り心地を求めて調整する。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('峰重力也', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('変わらず足は普通。自分次第。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('立間充宏', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('ダメ。(2Rは3コースから4着、12Rは2コースから粘って3着)', $response['bracket_5_racer_comment_1']);
        $this->assertSame('山下昂大', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('今節は合わせ切れていない。エンジンは悪くないと思う。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 11, date: '2024-01-01');
        $this->assertSame('藤原啓史朗', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('安定板が付いたせいか出足がなかった。合えばバランス型で上位。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('林祐介', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('足は変わらずいい。行き足が良くてSしやすいし、乗り心地もいい。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('岡瀬正人', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('安定板にチルト0で対応。バランスを取った分少し伸びは落ちた。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('入海馨', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('序盤よりだいぶ良くなって戦える。足は普通。何か特徴を付けたい。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('渡邉和将', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('毎回ペラは叩いている。安定板が付いた方が足も乗り心地もいい。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('平尾崇典', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラの合わせ方次第だが、ミスしている。', $response['bracket_6_racer_comment_1']);
    }
}
