<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium13;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium13Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium13
     */
    protected Stadium13 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium13(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket1RacerName']);
        $this->assertSame(7.08, $response['bracket1ExhibitionTime']);
        $this->assertSame(38.01, $response['bracket1LapTime']);
        $this->assertSame(11.67, $response['bracket1TurnTime']);
        $this->assertSame('鋤柄貴俊', $response['bracket2RacerName']);
        $this->assertSame(7.13, $response['bracket2ExhibitionTime']);
        $this->assertSame(38.10, $response['bracket2LapTime']);
        $this->assertSame(11.89, $response['bracket2TurnTime']);
        $this->assertSame('一瀬明', $response['bracket3RacerName']);
        $this->assertSame(7.08, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.64, $response['bracket3LapTime']);
        $this->assertSame(11.72, $response['bracket3TurnTime']);
        $this->assertSame('勝野竜司', $response['bracket4RacerName']);
        $this->assertSame(7.05, $response['bracket4ExhibitionTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.90, $response['bracket4TurnTime']);
        $this->assertSame('松浦博人', $response['bracket5RacerName']);
        $this->assertSame(7.07, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.25, $response['bracket5LapTime']);
        $this->assertSame(11.63, $response['bracket5TurnTime']);
        $this->assertSame('高倉孝太', $response['bracket6RacerName']);
        $this->assertSame(7.02, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.02, $response['bracket6LapTime']);
        $this->assertSame(11.74, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-04-23');
        $this->assertSame('津久井拓也', $response['bracket1RacerName']);
        $this->assertSame(7.04, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.59, $response['bracket1LapTime']);
        $this->assertSame(11.75, $response['bracket1TurnTime']);
        $this->assertSame('山地正樹', $response['bracket2RacerName']);
        $this->assertSame(7.04, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.53, $response['bracket2LapTime']);
        $this->assertSame(11.72, $response['bracket2TurnTime']);
        $this->assertSame('高倉孝太', $response['bracket3RacerName']);
        $this->assertSame(7.10, $response['bracket3ExhibitionTime']);
        $this->assertSame(38.15, $response['bracket3LapTime']);
        $this->assertSame(11.94, $response['bracket3TurnTime']);
        $this->assertSame('松山裕基', $response['bracket4RacerName']);
        $this->assertSame(7.03, $response['bracket4ExhibitionTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.99, $response['bracket4TurnTime']);
        $this->assertSame('登玉隼百', $response['bracket5RacerName']);
        $this->assertSame(7.06, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.47, $response['bracket5LapTime']);
        $this->assertSame(12.03, $response['bracket5TurnTime']);
        $this->assertSame('野長瀬正孝', $response['bracket6RacerName']);
        $this->assertSame(7.04, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.52, $response['bracket6LapTime']);
        $this->assertSame(11.89, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('回転が合ってなくて重かったです', $response['bracket1RacerComment1']);
        $this->assertSame('鋤柄貴俊', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('走り出せば普通はあるかな', $response['bracket2RacerComment1']);
        $this->assertSame('一瀬明', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('出足はダメだけど直線は普通', $response['bracket3RacerComment1']);
        $this->assertSame('勝野竜司', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('足は悪くない感じの普通です', $response['bracket4RacerComment1']);
        $this->assertSame('松浦博人', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('起こしや乗り味は悪くないです', $response['bracket5RacerComment1']);
        $this->assertSame('高倉孝太', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('スタンダードな感じでしたね', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 10, date: '2024-04-23');
        $this->assertSame('津久井拓也', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('ペラを叩いたけど起こしが△', $response['bracket1RacerComment1']);
        $this->assertSame('山地正樹', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('(前検は目立つ舟足はなかった)', $response['bracket2RacerComment1']);
        $this->assertSame('高倉孝太', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('スタンダードな感じでしたね', $response['bracket3RacerComment1']);
        $this->assertSame('松山裕基', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('体感が悪い感じがしました', $response['bracket4RacerComment1']);
        $this->assertSame('登玉隼百', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('班の中でも少し余裕がありました', $response['bracket5RacerComment1']);
        $this->assertSame('野長瀬正孝', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('ペラを叩いて行って感じは○', $response['bracket6RacerComment1']);
    }
}
