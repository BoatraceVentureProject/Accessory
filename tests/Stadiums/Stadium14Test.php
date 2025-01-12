<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium14;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium14Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium14
     */
    protected Stadium14 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium14(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('市橋卓士', $response['bracket_1_racer_name']);
        $this->assertSame(6.89, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.39, $response['bracket_1_lap_time']);
        $this->assertSame(5.67, $response['bracket_1_turn_time']);
        $this->assertSame(6.88, $response['bracket_1_straight_time']);
        $this->assertSame('武田信一', $response['bracket_2_racer_name']);
        $this->assertSame(6.94, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.17, $response['bracket_2_lap_time']);
        $this->assertSame(5.86, $response['bracket_2_turn_time']);
        $this->assertSame(7.20, $response['bracket_2_straight_time']);
        $this->assertSame('井手良太', $response['bracket_3_racer_name']);
        $this->assertSame(6.96, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.10, $response['bracket_3_lap_time']);
        $this->assertSame(5.87, $response['bracket_3_turn_time']);
        $this->assertSame(7.07, $response['bracket_3_straight_time']);
        $this->assertSame('松本弓雄', $response['bracket_4_racer_name']);
        $this->assertSame(6.92, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.87, $response['bracket_4_lap_time']);
        $this->assertSame(5.70, $response['bracket_4_turn_time']);
        $this->assertSame(7.08, $response['bracket_4_straight_time']);
        $this->assertSame('笠雅雄', $response['bracket_5_racer_name']);
        $this->assertSame(6.97, $response['bracket_5_exhibition_time']);
        $this->assertSame(36.97, $response['bracket_5_lap_time']);
        $this->assertSame(5.80, $response['bracket_5_turn_time']);
        $this->assertSame(6.91, $response['bracket_5_straight_time']);
        $this->assertSame('赤池修平', $response['bracket_6_racer_name']);
        $this->assertSame(6.99, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.90, $response['bracket_6_lap_time']);
        $this->assertSame(7.30, $response['bracket_6_turn_time']);
        $this->assertSame(6.80, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('葛原大陽', $response['bracket_1_racer_name']);
        $this->assertSame(6.94, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.80, $response['bracket_1_lap_time']);
        $this->assertSame(5.63, $response['bracket_1_turn_time']);
        $this->assertSame(7.07, $response['bracket_1_straight_time']);
        $this->assertSame('渡辺崇', $response['bracket_2_racer_name']);
        $this->assertSame(6.87, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.87, $response['bracket_2_lap_time']);
        $this->assertSame(5.70, $response['bracket_2_turn_time']);
        $this->assertSame(7.23, $response['bracket_2_straight_time']);
        $this->assertSame('西野雄貴', $response['bracket_3_racer_name']);
        $this->assertSame(6.92, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.27, $response['bracket_3_lap_time']);
        $this->assertSame(5.63, $response['bracket_3_turn_time']);
        $this->assertSame(7.00, $response['bracket_3_straight_time']);
        $this->assertSame('垂水悠', $response['bracket_4_racer_name']);
        $this->assertSame(6.83, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.43, $response['bracket_4_lap_time']);
        $this->assertSame(5.87, $response['bracket_4_turn_time']);
        $this->assertSame(6.93, $response['bracket_4_straight_time']);
        $this->assertSame('齊藤優', $response['bracket_5_racer_name']);
        $this->assertSame(6.93, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.03, $response['bracket_5_lap_time']);
        $this->assertSame(5.43, $response['bracket_5_turn_time']);
        $this->assertSame(7.03, $response['bracket_5_straight_time']);
        $this->assertSame('田村慶', $response['bracket_6_racer_name']);
        $this->assertSame(6.97, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.77, $response['bracket_6_lap_time']);
        $this->assertSame(5.57, $response['bracket_6_turn_time']);
        $this->assertSame(7.00, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('市橋卓士', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('初日と変わらず、完全な伸び型', $response['bracket_1_racer_comment_1']);
        $this->assertSame('武田信一', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ペラの微調整ぐらいで変わらない', $response['bracket_2_racer_comment_1']);
        $this->assertSame('井手良太', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('後半が今節では一番ましだった', $response['bracket_3_racer_comment_1']);
        $this->assertSame('松本弓雄', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('まだ調整が合ってなく、ずれている', $response['bracket_4_racer_comment_1']);
        $this->assertSame('笠雅雄', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('足は悪くないけど、乗り心地が課題', $response['bracket_5_racer_comment_1']);
        $this->assertSame('赤池修平', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('少し回す方向でグリップはしていた', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('葛原大陽', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('まだビシッとは合ってなくペラ調整を', $response['bracket_1_racer_comment_1']);
        $this->assertSame('渡辺崇', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ペラ調整をしてもしっくりきていない', $response['bracket_2_racer_comment_1']);
        $this->assertSame('西野雄貴', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('調整でポーンと良くなる感じもある', $response['bracket_3_racer_comment_1']);
        $this->assertSame('垂水悠', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('チルトを跳ねても足は良かったけど…', $response['bracket_4_racer_comment_1']);
        $this->assertSame('齊藤優', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('安定板がついても、戦える足はある', $response['bracket_5_racer_comment_1']);
        $this->assertSame('田村慶', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラ調整だけで全体的に上積みできた', $response['bracket_6_racer_comment_1']);
    }
}
