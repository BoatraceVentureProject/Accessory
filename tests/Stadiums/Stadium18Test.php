<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium18;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium18Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium18
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
        $this->assertSame('末永祐輝', $response['bracket1RacerName']);
        $this->assertSame(6.82, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.61, $response['bracket1LapTime']);
        $this->assertSame(11.33, $response['bracket1TurnTime']);
        $this->assertSame('金子順一', $response['bracket2RacerName']);
        $this->assertSame(6.84, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.35, $response['bracket2LapTime']);
        $this->assertSame(11.62	, $response['bracket2TurnTime']);
        $this->assertSame('石倉拓美', $response['bracket3RacerName']);
        $this->assertSame(6.92, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.78, $response['bracket3LapTime']);
        $this->assertSame(11.96, $response['bracket3TurnTime']);
        $this->assertSame('花本剛', $response['bracket4RacerName']);
        $this->assertSame(6.94, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.39, $response['bracket4LapTime']);
        $this->assertSame(11.67, $response['bracket4TurnTime']);
        $this->assertSame('加木郁', $response['bracket5RacerName']);
        $this->assertSame(6.87, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(11.55, $response['bracket5TurnTime']);
        $this->assertSame('藤本佳史', $response['bracket6RacerName']);
        $this->assertSame(6.97, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.60, $response['bracket6LapTime']);
        $this->assertSame(11.59, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2025-01-01');
        $this->assertSame('広次修', $response['bracket1RacerName']);
        $this->assertSame(6.93, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.04, $response['bracket1LapTime']);
        $this->assertSame(11.41, $response['bracket1TurnTime']);
        $this->assertSame('笹木香吾', $response['bracket2RacerName']);
        $this->assertSame(6.95, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.38, $response['bracket2LapTime']);
        $this->assertSame(11.67, $response['bracket2TurnTime']);
        $this->assertSame('東健介', $response['bracket3RacerName']);
        $this->assertSame(6.98, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.56, $response['bracket3LapTime']);
        $this->assertSame(11.58, $response['bracket3TurnTime']);
        $this->assertSame('小川広大', $response['bracket4RacerName']);
        $this->assertSame(6.94, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.71, $response['bracket4LapTime']);
        $this->assertSame(11.70, $response['bracket4TurnTime']);
        $this->assertSame('藤森拓海', $response['bracket5RacerName']);
        $this->assertSame(6.91, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.70, $response['bracket5LapTime']);
        $this->assertSame(11.73, $response['bracket5TurnTime']);
        $this->assertSame('藤井徹', $response['bracket6RacerName']);
        $this->assertSame(6.95, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.06, $response['bracket6LapTime']);
        $this->assertSame(11.98, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2025-01-01');
        $this->assertSame('末永祐輝', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('状態は良かったと思います。', $response['bracket1RacerComment1']);
        $this->assertSame('金子順一', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('足は変わっていない。', $response['bracket2RacerComment1']);
        $this->assertSame('石倉拓美', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('中堅くらいです。', $response['bracket3RacerComment1']);
        $this->assertSame('花本剛', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('風が強くてもグリップが良かった。', $response['bracket4RacerComment1']);
        $this->assertSame('加木郁', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('悪くないけど、いい感じはしない。', $response['bracket5RacerComment1']);
        $this->assertSame('藤本佳史', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('足は普通くらい。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2025-01-01');
        $this->assertSame('広次修', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('出足寄りで下がることはない。', $response['bracket1RacerComment1']);
        $this->assertSame('笹木香吾', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('(前日コメ)乗りやすくて出足はいい。', $response['bracket2RacerComment1']);
        $this->assertSame('東健介', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('出足、行き足系で悪くない。', $response['bracket3RacerComment1']);
        $this->assertSame('小川広大', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('回って進んでいない。', $response['bracket4RacerComment1']);
        $this->assertSame('藤森拓海', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('直線は負ける人はいないです。', $response['bracket5RacerComment1']);
        $this->assertSame('藤井徹', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('レース足が弱い。整備します。', $response['bracket6RacerComment1']);
    }
}
