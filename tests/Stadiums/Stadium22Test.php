<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium22;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium22Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium22
     */
    protected Stadium22 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium22(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('益田啓司', $response['bracket_1_racer_name']);
        $this->assertSame(6.87, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.49, $response['bracket_1_lap_time']);
        $this->assertSame(5.53, $response['bracket_1_turn_time']);
        $this->assertSame(7.67, $response['bracket_1_straight_time']);
        $this->assertSame('篠原飛翔', $response['bracket_2_racer_name']);
        $this->assertSame(6.84, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.64, $response['bracket_2_lap_time']);
        $this->assertSame(5.65, $response['bracket_2_turn_time']);
        $this->assertSame(7.53, $response['bracket_2_straight_time']);
        $this->assertSame('藤森陸斗', $response['bracket_3_racer_name']);
        $this->assertSame(6.86, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.17, $response['bracket_3_lap_time']);
        $this->assertSame(5.63, $response['bracket_3_turn_time']);
        $this->assertSame(7.50, $response['bracket_3_straight_time']);
        $this->assertSame('森晋太郎', $response['bracket_4_racer_name']);
        $this->assertSame(6.90, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.83, $response['bracket_4_lap_time']);
        $this->assertSame(5.70, $response['bracket_4_turn_time']);
        $this->assertSame(7.60, $response['bracket_4_straight_time']);
        $this->assertSame('梶原正', $response['bracket_5_racer_name']);
        $this->assertSame(6.93, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.50, $response['bracket_5_lap_time']);
        $this->assertSame(5.80, $response['bracket_5_turn_time']);
        $this->assertSame(7.77, $response['bracket_5_straight_time']);
        $this->assertSame('桂林寛', $response['bracket_6_racer_name']);
        $this->assertSame(6.88, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.57, $response['bracket_6_lap_time']);
        $this->assertSame(5.73, $response['bracket_6_turn_time']);
        $this->assertSame(7.63, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 7, date: '2024-01-03');
        $this->assertSame('梶原正', $response['bracket_1_racer_name']);
        $this->assertSame(6.85, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.17, $response['bracket_1_lap_time']);
        $this->assertSame(5.93, $response['bracket_1_turn_time']);
        $this->assertSame(7.73, $response['bracket_1_straight_time']);
        $this->assertSame('安東幸治', $response['bracket_2_racer_name']);
        $this->assertSame(6.85, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.20, $response['bracket_2_lap_time']);
        $this->assertSame(5.67, $response['bracket_2_turn_time']);
        $this->assertSame(7.60, $response['bracket_2_straight_time']);
        $this->assertSame('松本真広', $response['bracket_3_racer_name']);
        $this->assertSame(6.79, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.30, $response['bracket_3_lap_time']);
        $this->assertSame(5.83, $response['bracket_3_turn_time']);
        $this->assertSame(7.53, $response['bracket_3_straight_time']);
        $this->assertSame('原田才一郎', $response['bracket_4_racer_name']);
        $this->assertSame(6.80, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.53, $response['bracket_4_lap_time']);
        $this->assertSame(5.61, $response['bracket_4_turn_time']);
        $this->assertSame(7.63, $response['bracket_4_straight_time']);
        $this->assertSame('奈須啓太', $response['bracket_5_racer_name']);
        $this->assertSame(6.91, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.93, $response['bracket_5_lap_time']);
        $this->assertSame(5.73, $response['bracket_5_turn_time']);
        $this->assertSame(7.67, $response['bracket_5_straight_time']);
        $this->assertSame('石川真二', $response['bracket_6_racer_name']);
        $this->assertSame(6.93, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.80, $response['bracket_6_lap_time']);
        $this->assertSame(5.57, $response['bracket_6_turn_time']);
        $this->assertSame(7.60, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('益田啓司', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('回り過ぎの分、乗りづらさを感じた。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('篠原飛翔', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('まだ合っていないけど、そこまで悪くない。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('藤森陸斗', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('伸びは明らかにいいが、乗りづらさがある。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('森晋太郎', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('(篠崎)仁志さんには少し出られる感じ。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('梶原正', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('何となくだけど伸び寄りの感じだった。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('桂林寛', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラは叩いた。行き足に力強さがある。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 7, date: '2024-01-03');
        $this->assertSame('梶原正', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('何となくだけど伸び寄りの感じだった。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('安東幸治', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('手前の感じがもうひとつだった。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('松本真広', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('直線で出て行く感じがあった。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('原田才一郎', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('スリット付近は周りと変わらなかった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('奈須啓太', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('いい感じがしない。ターンで横に滑る。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('石川真二', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('新ペラに換わったので何とも言えない。', $response['bracket_6_racer_comment_1']);
    }
}