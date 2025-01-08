<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium24;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium24Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium24
     */
    protected Stadium24 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium24(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket_1_racer_name']);
        $this->assertSame(6.89, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.93, $response['bracket_1_lap_time']);
        $this->assertSame(6.12, $response['bracket_1_turn_time']);
        $this->assertSame(7.33, $response['bracket_1_straight_time']);
        $this->assertSame('山口真喜子', $response['bracket_2_racer_name']);
        $this->assertSame(6.83, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.73, $response['bracket_2_lap_time']);
        $this->assertSame(6.10, $response['bracket_2_turn_time']);
        $this->assertSame(7.23, $response['bracket_2_straight_time']);
        $this->assertSame('中島浩哉', $response['bracket_3_racer_name']);
        $this->assertSame(6.87, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.83, $response['bracket_3_lap_time']);
        $this->assertSame(6.00, $response['bracket_3_turn_time']);
        $this->assertSame(7.33, $response['bracket_3_straight_time']);
        $this->assertSame('江頭賢太', $response['bracket_4_racer_name']);
        $this->assertSame(6.83, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.61, $response['bracket_4_lap_time']);
        $this->assertSame(6.29, $response['bracket_4_turn_time']);
        $this->assertSame(7.23, $response['bracket_4_straight_time']);
        $this->assertSame('田中孝明', $response['bracket_5_racer_name']);
        $this->assertSame(6.86, $response['bracket_5_exhibition_time']);
        $this->assertSame(36.87, $response['bracket_5_lap_time']);
        $this->assertSame(6.07, $response['bracket_5_turn_time']);
        $this->assertSame(7.33, $response['bracket_5_straight_time']);
        $this->assertSame('津留浩一郎', $response['bracket_6_racer_name']);
        $this->assertSame(6.77, $response['bracket_6_exhibition_time']);
        $this->assertSame(36.80, $response['bracket_6_lap_time']);
        $this->assertSame(6.50, $response['bracket_6_turn_time']);
        $this->assertSame(7.37, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('山崎昂介', $response['bracket_1_racer_name']);
        $this->assertSame(6.79, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.37, $response['bracket_1_lap_time']);
        $this->assertSame(6.39, $response['bracket_1_turn_time']);
        $this->assertSame(7.23, $response['bracket_1_straight_time']);
        $this->assertSame('谷川将太', $response['bracket_2_racer_name']);
        $this->assertSame(6.83, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.03, $response['bracket_2_lap_time']);
        $this->assertSame(6.27, $response['bracket_2_turn_time']);
        $this->assertSame(7.23, $response['bracket_2_straight_time']);
        $this->assertSame('眞鳥康太', $response['bracket_3_racer_name']);
        $this->assertSame(6.87, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.25, $response['bracket_3_lap_time']);
        $this->assertSame(6.50, $response['bracket_3_turn_time']);
        $this->assertSame(7.37, $response['bracket_3_straight_time']);
        $this->assertSame('森口和紀', $response['bracket_4_racer_name']);
        $this->assertSame(6.85, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.77, $response['bracket_4_lap_time']);
        $this->assertSame(6.17, $response['bracket_4_turn_time']);
        $this->assertSame(7.33, $response['bracket_4_straight_time']);
        $this->assertSame('大串重幸', $response['bracket_5_racer_name']);
        $this->assertSame(6.84, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.82, $response['bracket_5_lap_time']);
        $this->assertSame(6.23, $response['bracket_5_turn_time']);
        $this->assertSame(7.34, $response['bracket_5_straight_time']);
        $this->assertSame('吉川勇作', $response['bracket_6_racer_name']);
        $this->assertSame(6.84, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.54, $response['bracket_6_lap_time']);
        $this->assertSame(6.33, $response['bracket_6_turn_time']);
        $this->assertSame(7.33, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('体感では行き足と乗り心地が悪い感じがした。ペラと本体整備も考える', $response['bracket_1_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_1_racer_comment_2_label']);
        $this->assertSame('(当日気配)レース後「行き足から伸びは少し気になるけど、前検よりは上向いている。回転の上がりはもう少しな感じ。出足は少し重いかも。競ってみてどうかですね。乗りにくさはなさそうですよ。」[19:32]', $response['bracket_1_racer_comment_2']);
        $this->assertSame('山口真喜子', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('回転が上がっていなかったし、振り込みそうにもなった。ペラを叩いた特訓の体感もよくない。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_2_racer_comment_2_label']);
        $this->assertSame('(当日気配)レース後「試運転では出足がなくて置いて行かれていたし、本番でもペラが合っていなくてターンをしてから舟が進んでいなかったですね。伸びは下がることはない。出足を求めて調整する。」[19:57]', $response['bracket_2_racer_comment_2']);
        $this->assertSame('中島浩哉', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('そのまま行ったけど、ペラが特殊すぎて乗れなかった。伸びるわけでもない。前検は参考外です。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('江頭賢太', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('握った時の反応が良かったり、悪かったりした。足うんぬんより、とにかく気持ちで走ります。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('田中孝明', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('出足や起こしは悪いけど伸びが良かった。僕向きではないけど、このまま1回乗ってみてもいいかも。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('津留浩一郎', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('まだ調整途中だけど、手応えとしては悪くないですよ。ちょっと伸び型。', $response['bracket_6_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_6_racer_comment_2_label']);
        $this->assertSame('(当日気配)レース後「前半はぼちぼちいい感触だった。やや伸び型で、出足は少し重さがありましたね。後半へは微調整くらい。」[19:08]', $response['bracket_6_racer_comment_2']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('山崎昂介', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('そのまま乗りました。足は普通。水面の影響もあるのか、乗り心地は良くなかった。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('谷川将太', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('普通はありそう。乗り心地は許容範囲内。いつもの自分の形にペラを叩く。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('眞鳥康太', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('スリットから先で少し伸びるけど、手前が重たいのと乗りにくさがある。手前を求めて調整。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('森口和紀', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('乗った感じもターンもしっくりこなかった。ペラは叩き変えようと思っている。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('大串重幸', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('思ったより下がっていなかったし、意外と大丈夫かもしれない。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_5_racer_comment_2_label']);
        $this->assertSame('(当日気配)レース後「エンジンは2連対率24%以上は動いていると思う。出足や伸びは普通あるけど、乗り心地が気になったのでレース後にそこを求めて調整した。」[20:00]', $response['bracket_5_racer_comment_2']);
        $this->assertSame('吉川勇作', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('みんなと一緒ぐらいは行っていた。回転の数字は出てないけど、体感はそんなことはなかった。', $response['bracket_6_racer_comment_1']);
    }
}
