<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium10;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium10Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium10
     */
    protected Stadium10 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium10(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-18');
        $this->assertSame('大上卓人', $response['bracket_1_racer_name']);
        $this->assertSame(6.55, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.30, $response['bracket_1_lap_time']);
        $this->assertSame(5.07, $response['bracket_1_turn_time']);
        $this->assertSame(6.53, $response['bracket_1_straight_time']);
        $this->assertSame('齋藤達希', $response['bracket_2_racer_name']);
        $this->assertSame(6.65, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.20, $response['bracket_2_lap_time']);
        $this->assertSame(5.40, $response['bracket_2_turn_time']);
        $this->assertSame(6.72, $response['bracket_2_straight_time']);
        $this->assertSame('本吉正樹', $response['bracket_3_racer_name']);
        $this->assertSame(6.63, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.87, $response['bracket_3_lap_time']);
        $this->assertSame(5.43, $response['bracket_3_turn_time']);
        $this->assertSame(6.63, $response['bracket_3_straight_time']);
        $this->assertSame('竹田吉行', $response['bracket_4_racer_name']);
        $this->assertSame(6.65, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.25, $response['bracket_4_lap_time']);
        $this->assertSame(5.53, $response['bracket_4_turn_time']);
        $this->assertSame(6.67, $response['bracket_4_straight_time']);
        $this->assertSame('松下誉士', $response['bracket_5_racer_name']);
        $this->assertSame(6.59, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.63, $response['bracket_5_lap_time']);
        $this->assertSame(5.38, $response['bracket_5_turn_time']);
        $this->assertSame(6.62, $response['bracket_5_straight_time']);
        $this->assertSame('籾山佳岳', $response['bracket_6_racer_name']);
        $this->assertSame(6.73, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.07, $response['bracket_6_lap_time']);
        $this->assertSame(5.50, $response['bracket_6_turn_time']);
        $this->assertSame(6.70, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['bracket_1_racer_name']);
        $this->assertSame(6.67, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.83, $response['bracket_1_lap_time']);
        $this->assertSame(5.17, $response['bracket_1_turn_time']);
        $this->assertSame(6.63, $response['bracket_1_straight_time']);
        $this->assertSame('松本庸平', $response['bracket_2_racer_name']);
        $this->assertSame(6.55, $response['bracket_2_exhibition_time']);
        $this->assertSame(38.25, $response['bracket_2_lap_time']);
        $this->assertSame(5.65, $response['bracket_2_turn_time']);
        $this->assertSame(6.77, $response['bracket_2_straight_time']);
        $this->assertSame('古田祐貴', $response['bracket_3_racer_name']);
        $this->assertSame(6.65, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.27, $response['bracket_3_lap_time']);
        $this->assertSame(5.70, $response['bracket_3_turn_time']);
        $this->assertSame(6.70, $response['bracket_3_straight_time']);
        $this->assertSame('寺嶋雄', $response['bracket_4_racer_name']);
        $this->assertSame(6.63, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.95, $response['bracket_4_lap_time']);
        $this->assertSame(5.70, $response['bracket_4_turn_time']);
        $this->assertSame(6.70, $response['bracket_4_straight_time']);
        $this->assertSame('本吉正樹', $response['bracket_5_racer_name']);
        $this->assertSame(6.67, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.62, $response['bracket_5_lap_time']);
        $this->assertSame(5.62, $response['bracket_5_turn_time']);
        $this->assertSame(6.70, $response['bracket_5_straight_time']);
        $this->assertSame('徳増秀樹', $response['bracket_6_racer_name']);
        $this->assertSame(6.63, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.63, $response['bracket_6_lap_time']);
        $this->assertSame(5.50, $response['bracket_6_turn_time']);
        $this->assertSame(6.58, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-18');
        $this->assertSame('大上卓人', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('足悪くなさそうでまずはこのまま', $response['bracket_1_racer_comment_1']);
        $this->assertSame('齋藤達希', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ペラ叩いて一瞬の出足は良かった', $response['bracket_2_racer_comment_1']);
        $this->assertSame('本吉正樹', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['bracket_3_racer_comment_1']);
        $this->assertSame('竹田吉行', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('モーターは良さそうだしペラから', $response['bracket_4_racer_comment_1']);
        $this->assertSame('松下誉士', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('伸びる感じなくターン合ってない', $response['bracket_5_racer_comment_1']);
        $this->assertSame('籾山佳岳', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('班の中で一番悪い感じがした', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('弱くはないけど普通くらいかな', $response['bracket_1_racer_comment_1']);
        $this->assertSame('松本庸平', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('悪い感じなかったが乗心地不安定', $response['bracket_2_racer_comment_1']);
        $this->assertSame('古田祐貴', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('このままでも戦えそうな感じした', $response['bracket_3_racer_comment_1']);
        $this->assertSame('寺嶋雄', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('回転を合わせれば良くなりそう', $response['bracket_4_racer_comment_1']);
        $this->assertSame('本吉正樹', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['bracket_5_racer_comment_1']);
        $this->assertSame('徳増秀樹', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラが合ってない感じ。色々やる', $response['bracket_6_racer_comment_1']);
    }
}
