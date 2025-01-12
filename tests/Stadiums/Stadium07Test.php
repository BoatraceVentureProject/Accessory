<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium07;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium07Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium07
     */
    protected Stadium07 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium07(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('吉田裕平', $response['bracket_1_racer_name']);
        $this->assertSame(6.63, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.10, $response['bracket_1_lap_time']);
        $this->assertSame(4.86, $response['bracket_1_turn_time']);
        $this->assertSame(6.10, $response['bracket_1_straight_time']);
        $this->assertSame('樅山拓馬', $response['bracket_2_racer_name']);
        $this->assertSame(6.76, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.09, $response['bracket_2_lap_time']);
        $this->assertSame(5.12, $response['bracket_2_turn_time']);
        $this->assertSame(6.28, $response['bracket_2_straight_time']);
        $this->assertSame('服部達哉', $response['bracket_3_racer_name']);
        $this->assertSame(6.69, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.72, $response['bracket_3_lap_time']);
        $this->assertSame(5.50, $response['bracket_3_turn_time']);
        $this->assertSame(6.18, $response['bracket_3_straight_time']);
        $this->assertSame('宇野博之', $response['bracket_4_racer_name']);
        $this->assertSame(6.74, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.12, $response['bracket_4_lap_time']);
        $this->assertSame(5.58, $response['bracket_4_turn_time']);
        $this->assertSame(6.23, $response['bracket_4_straight_time']);
        $this->assertSame('沼田大都', $response['bracket_5_racer_name']);
        $this->assertSame(6.66, $response['bracket_5_exhibition_time']);
        $this->assertSame(38.05, $response['bracket_5_lap_time']);
        $this->assertSame(5.84, $response['bracket_5_turn_time']);
        $this->assertSame(5.93, $response['bracket_5_straight_time']);
        $this->assertSame('仲道大輔', $response['bracket_6_racer_name']);
        $this->assertSame(6.58, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.82, $response['bracket_6_lap_time']);
        $this->assertSame(5.41, $response['bracket_6_turn_time']);
        $this->assertSame(6.14, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('花田和明', $response['bracket_1_racer_name']);
        $this->assertSame(6.62, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.15, $response['bracket_1_lap_time']);
        $this->assertSame(5.05, $response['bracket_1_turn_time']);
        $this->assertSame(6.30, $response['bracket_1_straight_time']);
        $this->assertSame('丹下将', $response['bracket_2_racer_name']);
        $this->assertSame(6.72, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.78, $response['bracket_2_lap_time']);
        $this->assertSame(5.23, $response['bracket_2_turn_time']);
        $this->assertSame(6.18, $response['bracket_2_straight_time']);
        $this->assertSame('北川潤二', $response['bracket_3_racer_name']);
        $this->assertSame(6.73, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.68, $response['bracket_3_lap_time']);
        $this->assertSame(5.06, $response['bracket_3_turn_time']);
        $this->assertSame(6.28, $response['bracket_3_straight_time']);
        $this->assertSame('小西英輝', $response['bracket_4_racer_name']);
        $this->assertSame(6.73, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.60, $response['bracket_4_lap_time']);
        $this->assertSame(5.38, $response['bracket_4_turn_time']);
        $this->assertSame(6.12, $response['bracket_4_straight_time']);
        $this->assertSame('前田聖文', $response['bracket_5_racer_name']);
        $this->assertSame(6.73, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.11, $response['bracket_5_lap_time']);
        $this->assertSame(5.22, $response['bracket_5_turn_time']);
        $this->assertSame(6.05, $response['bracket_5_straight_time']);
        $this->assertSame('野中一平', $response['bracket_6_racer_name']);
        $this->assertSame(6.64, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.73, $response['bracket_6_lap_time']);
        $this->assertSame(5.11, $response['bracket_6_turn_time']);
        $this->assertSame(6.18, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('吉田裕平', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('足は60点だけど、中の上くらい。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('樅山拓馬', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('引き波を越える感じが良くないし、特訓から伸びは劣勢。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('服部達哉', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('後半はバランスが悪かったし、前半の方が良かった。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('宇野博之', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('気圧が低くてメチャ重かった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('沼田大都', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('特訓や展示の行き足は良かったけど少し回したらスタートが…。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_5_racer_comment_2_label']);
        $this->assertSame('回っていて乗りやすくなった。もう少し直線を求めたい。', $response['bracket_5_racer_comment_2']);
        $this->assertSame('仲道大輔', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('エンジンは悪くないけど、49%の感じはない。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('花田和明', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('悪くはないけど、まだ機歴ほどの感触はない。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('丹下将', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('展示までの回り足は良かった。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('北川潤二', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('本体のメンテナンスとペラ調整をしたけど、行き足が良くない。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('小西英輝', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('ペラを叩いたら、後半はターン回りがマシになっていた。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_4_racer_comment_2_label']);
        $this->assertSame('ペラ叩き変え体感は今日の方が○。足は行ってみてどうか。', $response['bracket_4_racer_comment_2']);
        $this->assertSame('前田聖文', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('乗り心地は良くなっていたけど、足は大したことない。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('野中一平', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('合ってなくてターンに影響があった。スリット近辺は悪くない。', $response['bracket_6_racer_comment_1']);
    }
}
