<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium19;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium19Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium19
     */
    protected Stadium19 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium19(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket_1_racer_name']);
        $this->assertSame(6.81, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.57, $response['bracket_1_lap_time']);
        $this->assertSame(5.90, $response['bracket_1_turn_time']);
        $this->assertSame(7.33, $response['bracket_1_straight_time']);
        $this->assertSame('新良一規', $response['bracket_2_racer_name']);
        $this->assertSame(6.77, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.24, $response['bracket_2_lap_time']);
        $this->assertSame(6.14, $response['bracket_2_turn_time']);
        $this->assertSame(7.45, $response['bracket_2_straight_time']);
        $this->assertSame('佐藤駿介', $response['bracket_3_racer_name']);
        $this->assertSame(6.81, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.03, $response['bracket_3_lap_time']);
        $this->assertSame(5.93, $response['bracket_3_turn_time']);
        $this->assertSame(7.39, $response['bracket_3_straight_time']);
        $this->assertSame('岡部貴司', $response['bracket_4_racer_name']);
        $this->assertSame(6.89, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.64, $response['bracket_4_lap_time']);
        $this->assertSame(5.91, $response['bracket_4_turn_time']);
        $this->assertSame(7.37, $response['bracket_4_straight_time']);
        $this->assertSame('田中浩之', $response['bracket_5_racer_name']);
        $this->assertSame(6.82, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.92, $response['bracket_5_lap_time']);
        $this->assertSame(6.42, $response['bracket_5_turn_time']);
        $this->assertSame(7.42, $response['bracket_5_straight_time']);
        $this->assertSame('大田直弥', $response['bracket_6_racer_name']);
        $this->assertSame(6.82, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.98, $response['bracket_6_lap_time']);
        $this->assertSame(5.58, $response['bracket_6_turn_time']);
        $this->assertSame(7.37, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-01');
        $this->assertSame('森田昭彦', $response['bracket_1_racer_name']);
        $this->assertSame(6.81, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.32, $response['bracket_1_lap_time']);
        $this->assertSame(5.48, $response['bracket_1_turn_time']);
        $this->assertSame(7.28, $response['bracket_1_straight_time']);
        $this->assertSame('片岡恵里', $response['bracket_2_racer_name']);
        $this->assertSame(6.74, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.53, $response['bracket_2_lap_time']);
        $this->assertSame(6.20, $response['bracket_2_turn_time']);
        $this->assertSame(7.16, $response['bracket_2_straight_time']);
        $this->assertSame('高濱芳久', $response['bracket_3_racer_name']);
        $this->assertSame(6.74, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.40, $response['bracket_3_lap_time']);
        $this->assertSame(5.60, $response['bracket_3_turn_time']);
        $this->assertSame(7.34, $response['bracket_3_straight_time']);
        $this->assertSame('岡本翔太郎', $response['bracket_4_racer_name']);
        $this->assertSame(6.77, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.70, $response['bracket_4_lap_time']);
        $this->assertSame(5.63, $response['bracket_4_turn_time']);
        $this->assertSame(7.29, $response['bracket_4_straight_time']);
        $this->assertSame('江本真治', $response['bracket_5_racer_name']);
        $this->assertSame(6.82, $response['bracket_5_exhibition_time']);
        $this->assertSame(36.64, $response['bracket_5_lap_time']);
        $this->assertSame(5.51, $response['bracket_5_turn_time']);
        $this->assertSame(7.31, $response['bracket_5_straight_time']);
        $this->assertSame('柳生泰二', $response['bracket_6_racer_name']);
        $this->assertSame(6.81, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.68, $response['bracket_6_lap_time']);
        $this->assertSame(5.50, $response['bracket_6_turn_time']);
        $this->assertSame(7.33, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('乗りやすいし、足もいい。出てる', $response['bracket_1_racer_comment_1']);
        $this->assertSame('新良一規', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('レースしやすい。乗り心地もいい', $response['bracket_2_racer_comment_1']);
        $this->assertSame('佐藤駿介', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('ゾーン狭いが合えば回り足はいい', $response['bracket_3_racer_comment_1']);
        $this->assertSame('岡部貴司', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('調整はほぼしてないが足は上の方', $response['bracket_4_racer_comment_1']);
        $this->assertSame('田中浩之', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('道中で競ってもやられることない', $response['bracket_5_racer_comment_1']);
        $this->assertSame('大田直弥', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('新ペラに換わってから全部がダメ', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2024-01-01');
        $this->assertSame('森田昭彦', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('まあまあ。全体に普通はあります', $response['bracket_1_racer_comment_1']);
        $this->assertSame('片岡恵里', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('握った反応とか、行き足いいです', $response['bracket_2_racer_comment_1']);
        $this->assertSame('高濱芳久', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('ペラ調整して行き足から伸びいい', $response['bracket_3_racer_comment_1']);
        $this->assertSame('岡本翔太郎', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('ペラ叩いて反応ある。乗りやすい', $response['bracket_4_racer_comment_1']);
        $this->assertSame('江本真治', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('思い切った調整して悪くなかった', $response['bracket_5_racer_comment_1']);
        $this->assertSame('柳生泰二', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('Sしっかり行けた。足も中堅ある', $response['bracket_6_racer_comment_1']);
    }
}
