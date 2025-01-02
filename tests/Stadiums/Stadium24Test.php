<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium24;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium24Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium24
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
        $this->assertSame('川上昇平', $response['bracket1RacerName']);
        $this->assertSame(6.89, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.93, $response['bracket1LapTime']);
        $this->assertSame(6.12, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame('山口真喜子', $response['bracket2RacerName']);
        $this->assertSame(6.83, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.73, $response['bracket2LapTime']);
        $this->assertSame(6.10, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('中島浩哉', $response['bracket3RacerName']);
        $this->assertSame(6.87, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket3LapTime']);
        $this->assertSame(6.00, $response['bracket3TurnTime']);
        $this->assertSame(7.33, $response['bracket3StraightTime']);
        $this->assertSame('江頭賢太', $response['bracket4RacerName']);
        $this->assertSame(6.83, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.61, $response['bracket4LapTime']);
        $this->assertSame(6.29, $response['bracket4TurnTime']);
        $this->assertSame(7.23, $response['bracket4StraightTime']);
        $this->assertSame('田中孝明', $response['bracket5RacerName']);
        $this->assertSame(6.86, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket5LapTime']);
        $this->assertSame(6.07, $response['bracket5TurnTime']);
        $this->assertSame(7.33, $response['bracket5StraightTime']);
        $this->assertSame('津留浩一郎', $response['bracket6RacerName']);
        $this->assertSame(6.77, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.80, $response['bracket6LapTime']);
        $this->assertSame(6.50, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('山崎昂介', $response['bracket1RacerName']);
        $this->assertSame(6.79, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.37, $response['bracket1LapTime']);
        $this->assertSame(6.39, $response['bracket1TurnTime']);
        $this->assertSame(7.23, $response['bracket1StraightTime']);
        $this->assertSame('谷川将太', $response['bracket2RacerName']);
        $this->assertSame(6.83, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket2LapTime']);
        $this->assertSame(6.27, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('眞鳥康太', $response['bracket3RacerName']);
        $this->assertSame(6.87, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.25, $response['bracket3LapTime']);
        $this->assertSame(6.50, $response['bracket3TurnTime']);
        $this->assertSame(7.37, $response['bracket3StraightTime']);
        $this->assertSame('森口和紀', $response['bracket4RacerName']);
        $this->assertSame(6.85, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.77, $response['bracket4LapTime']);
        $this->assertSame(6.17, $response['bracket4TurnTime']);
        $this->assertSame(7.33, $response['bracket4StraightTime']);
        $this->assertSame('大串重幸', $response['bracket5RacerName']);
        $this->assertSame(6.84, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.82, $response['bracket5LapTime']);
        $this->assertSame(6.23, $response['bracket5TurnTime']);
        $this->assertSame(7.34, $response['bracket5StraightTime']);
        $this->assertSame('吉川勇作', $response['bracket6RacerName']);
        $this->assertSame(6.84, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.54, $response['bracket6LapTime']);
        $this->assertSame(6.33, $response['bracket6TurnTime']);
        $this->assertSame(7.33, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('体感では行き足と乗り心地が悪い感じがした。ペラと本体整備も考える', $response['bracket1RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket1RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「行き足から伸びは少し気になるけど、前検よりは上向いている。回転の上がりはもう少しな感じ。出足は少し重いかも。競ってみてどうかですね。乗りにくさはなさそうですよ。」[19:32]', $response['bracket1RacerComment2']);
        $this->assertSame('山口真喜子', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('回転が上がっていなかったし、振り込みそうにもなった。ペラを叩いた特訓の体感もよくない。', $response['bracket2RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket2RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「試運転では出足がなくて置いて行かれていたし、本番でもペラが合っていなくてターンをしてから舟が進んでいなかったですね。伸びは下がることはない。出足を求めて調整する。」[19:57]', $response['bracket2RacerComment2']);
        $this->assertSame('中島浩哉', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('そのまま行ったけど、ペラが特殊すぎて乗れなかった。伸びるわけでもない。前検は参考外です。', $response['bracket3RacerComment1']);
        $this->assertSame('江頭賢太', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('握った時の反応が良かったり、悪かったりした。足うんぬんより、とにかく気持ちで走ります。', $response['bracket4RacerComment1']);
        $this->assertSame('田中孝明', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('出足や起こしは悪いけど伸びが良かった。僕向きではないけど、このまま1回乗ってみてもいいかも。', $response['bracket5RacerComment1']);
        $this->assertSame('津留浩一郎', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('まだ調整途中だけど、手応えとしては悪くないですよ。ちょっと伸び型。', $response['bracket6RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket6RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「前半はぼちぼちいい感触だった。やや伸び型で、出足は少し重さがありましたね。後半へは微調整くらい。」[19:08]', $response['bracket6RacerComment2']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('山崎昂介', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('そのまま乗りました。足は普通。水面の影響もあるのか、乗り心地は良くなかった。', $response['bracket1RacerComment1']);
        $this->assertSame('谷川将太', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('普通はありそう。乗り心地は許容範囲内。いつもの自分の形にペラを叩く。', $response['bracket2RacerComment1']);
        $this->assertSame('眞鳥康太', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('スリットから先で少し伸びるけど、手前が重たいのと乗りにくさがある。手前を求めて調整。', $response['bracket3RacerComment1']);
        $this->assertSame('森口和紀', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('乗った感じもターンもしっくりこなかった。ペラは叩き変えようと思っている。', $response['bracket4RacerComment1']);
        $this->assertSame('大串重幸', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('思ったより下がっていなかったし、意外と大丈夫かもしれない。', $response['bracket5RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket5RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「エンジンは2連対率24%以上は動いていると思う。出足や伸びは普通あるけど、乗り心地が気になったのでレース後にそこを求めて調整した。」[20:00]', $response['bracket5RacerComment2']);
        $this->assertSame('吉川勇作', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('みんなと一緒ぐらいは行っていた。回転の数字は出てないけど、体感はそんなことはなかった。', $response['bracket6RacerComment1']);
    }
}
