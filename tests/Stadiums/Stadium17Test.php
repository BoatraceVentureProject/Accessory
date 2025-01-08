<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium17;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium17Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium17
     */
    protected Stadium17 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium17(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('田中辰彦', $response['bracket_1_racer_name']);
        $this->assertSame(6.65, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.52, $response['bracket_1_lap_time']);
        $this->assertSame(5.73, $response['bracket_1_turn_time']);
        $this->assertSame(7.06, $response['bracket_1_straight_time']);
        $this->assertSame('永田義紘', $response['bracket_2_racer_name']);
        $this->assertSame(6.72, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.69, $response['bracket_2_lap_time']);
        $this->assertSame(5.70, $response['bracket_2_turn_time']);
        $this->assertSame(7.11, $response['bracket_2_straight_time']);
        $this->assertSame('角浜修', $response['bracket_3_racer_name']);
        $this->assertSame(6.71, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.23, $response['bracket_3_lap_time']);
        $this->assertSame(5.69, $response['bracket_3_turn_time']);
        $this->assertSame(7.16, $response['bracket_3_straight_time']);
        $this->assertSame('大原祥昌', $response['bracket_4_racer_name']);
        $this->assertSame(6.74, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.54, $response['bracket_4_lap_time']);
        $this->assertSame(5.59, $response['bracket_4_turn_time']);
        $this->assertSame(7.08, $response['bracket_4_straight_time']);
        $this->assertSame('下寺秀和', $response['bracket_5_racer_name']);
        $this->assertSame(6.69, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.25, $response['bracket_5_lap_time']);
        $this->assertSame(5.70, $response['bracket_5_turn_time']);
        $this->assertSame(7.25, $response['bracket_5_straight_time']);
        $this->assertSame('向井田直弥', $response['bracket_6_racer_name']);
        $this->assertSame(6.69, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.46, $response['bracket_6_lap_time']);
        $this->assertSame(5.64, $response['bracket_6_turn_time']);
        $this->assertSame(7.22, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('池上隆行', $response['bracket_1_racer_name']);
        $this->assertSame(6.81, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.11, $response['bracket_1_lap_time']);
        $this->assertSame(5.90, $response['bracket_1_turn_time']);
        $this->assertSame(7.23, $response['bracket_1_straight_time']);
        $this->assertSame('大上卓人', $response['bracket_2_racer_name']);
        $this->assertSame(6.71, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.56, $response['bracket_2_lap_time']);
        $this->assertSame(5.44, $response['bracket_2_turn_time']);
        $this->assertSame(7.13, $response['bracket_2_straight_time']);
        $this->assertSame('別府昌樹', $response['bracket_3_racer_name']);
        $this->assertSame(6.85, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.25, $response['bracket_3_lap_time']);
        $this->assertSame(5.61, $response['bracket_3_turn_time']);
        $this->assertSame(7.26, $response['bracket_3_straight_time']);
        $this->assertSame('正木聖賢', $response['bracket_4_racer_name']);
        $this->assertSame(6.75, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.47, $response['bracket_4_lap_time']);
        $this->assertSame(5.65, $response['bracket_4_turn_time']);
        $this->assertSame(7.38, $response['bracket_4_straight_time']);
        $this->assertSame('木山和幸', $response['bracket_5_racer_name']);
        $this->assertSame(6.79, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.59, $response['bracket_5_lap_time']);
        $this->assertSame(5.73, $response['bracket_5_turn_time']);
        $this->assertSame(7.25, $response['bracket_5_straight_time']);
        $this->assertSame('三宅健太', $response['bracket_6_racer_name']);
        $this->assertSame(6.79, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.67, $response['bracket_6_lap_time']);
        $this->assertSame(5.83, $response['bracket_6_turn_time']);
        $this->assertSame(7.31, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('田中辰彦', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('目立つ部分が無い足です。もう少しプロペラを調整します。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('永田義紘', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ターンする時の足が良い感じがします。このままでレースします。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('角浜修', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('中堅レベルの足で悪くないですね。伸びられる事もない。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('大原祥昌', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('エンジンは弱めなので、何か整備をしてみます。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('下寺秀和', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('伸びと出足のバランスが取れて、悪くない足です。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('向井田直弥', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('少し伸びが足りないけど、それ以外は悪くない感じです。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('池上隆行', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('行き足から伸びにかけて少し弱い。プロペラを調整してみる。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('大上卓人', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ターン出口の足が良いですね。プロペラの調整だけ続けます。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('別府昌樹', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('回転が合っていないので、プロペラを調整してみます。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('正木聖賢', $response['bracket_4_racer_name']);
        $this->assertSame('当日コメント', $response['bracket_4_racer_comment_2_label']);
        $this->assertSame('プロペラを調整して、足は上向いてきています。12:49更新', $response['bracket_4_racer_comment_2']);
        $this->assertSame('木山和幸', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('プロペラもそのままで、足は中堅レベルはあるよ。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('三宅健太', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('伸びが少し弱いですね。エンジン本体を整備してみます。', $response['bracket_6_racer_comment_1']);
    }
}
