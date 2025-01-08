<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium18;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium18Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium18
     */
    protected Stadium18 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium18(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2025-01-01');
        $this->assertSame('末永祐輝', $response['bracket_1_racer_name']);
        $this->assertSame(6.82, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.61, $response['bracket_1_lap_time']);
        $this->assertSame(11.33, $response['bracket_1_turn_time']);
        $this->assertSame('金子順一', $response['bracket_2_racer_name']);
        $this->assertSame(6.84, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.35, $response['bracket_2_lap_time']);
        $this->assertSame(11.62	, $response['bracket_2_turn_time']);
        $this->assertSame('石倉拓美', $response['bracket_3_racer_name']);
        $this->assertSame(6.92, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.78, $response['bracket_3_lap_time']);
        $this->assertSame(11.96, $response['bracket_3_turn_time']);
        $this->assertSame('花本剛', $response['bracket_4_racer_name']);
        $this->assertSame(6.94, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.39, $response['bracket_4_lap_time']);
        $this->assertSame(11.67, $response['bracket_4_turn_time']);
        $this->assertSame('加木郁', $response['bracket_5_racer_name']);
        $this->assertSame(6.87, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.41, $response['bracket_5_lap_time']);
        $this->assertSame(11.55, $response['bracket_5_turn_time']);
        $this->assertSame('藤本佳史', $response['bracket_6_racer_name']);
        $this->assertSame(6.97, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.60, $response['bracket_6_lap_time']);
        $this->assertSame(11.59, $response['bracket_6_turn_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2025-01-01');
        $this->assertSame('広次修', $response['bracket_1_racer_name']);
        $this->assertSame(6.93, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.04, $response['bracket_1_lap_time']);
        $this->assertSame(11.41, $response['bracket_1_turn_time']);
        $this->assertSame('笹木香吾', $response['bracket_2_racer_name']);
        $this->assertSame(6.95, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.38, $response['bracket_2_lap_time']);
        $this->assertSame(11.67, $response['bracket_2_turn_time']);
        $this->assertSame('東健介', $response['bracket_3_racer_name']);
        $this->assertSame(6.98, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.56, $response['bracket_3_lap_time']);
        $this->assertSame(11.58, $response['bracket_3_turn_time']);
        $this->assertSame('小川広大', $response['bracket_4_racer_name']);
        $this->assertSame(6.94, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.71, $response['bracket_4_lap_time']);
        $this->assertSame(11.70, $response['bracket_4_turn_time']);
        $this->assertSame('藤森拓海', $response['bracket_5_racer_name']);
        $this->assertSame(6.91, $response['bracket_5_exhibition_time']);
        $this->assertSame(38.70, $response['bracket_5_lap_time']);
        $this->assertSame(11.73, $response['bracket_5_turn_time']);
        $this->assertSame('藤井徹', $response['bracket_6_racer_name']);
        $this->assertSame(6.95, $response['bracket_6_exhibition_time']);
        $this->assertSame(38.06, $response['bracket_6_lap_time']);
        $this->assertSame(11.98, $response['bracket_6_turn_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2025-01-01');
        $this->assertSame('末永祐輝', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('状態は良かったと思います。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('金子順一', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('足は変わっていない。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('石倉拓美', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('中堅くらいです。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('花本剛', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('風が強くてもグリップが良かった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('加木郁', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('悪くないけど、いい感じはしない。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('藤本佳史', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('足は普通くらい。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2025-01-01');
        $this->assertSame('広次修', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('出足寄りで下がることはない。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('笹木香吾', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('(前日コメ)乗りやすくて出足はいい。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('東健介', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('出足、行き足系で悪くない。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('小川広大', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('回って進んでいない。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('藤森拓海', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('直線は負ける人はいないです。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('藤井徹', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('レース足が弱い。整備します。', $response['bracket_6_racer_comment_1']);
    }
}
