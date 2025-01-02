<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium21;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium21Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium21
     */
    protected Stadium21 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium21(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('新開航', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(35.62, $response['bracket1LapTime']);
        $this->assertSame(7.66, $response['bracket1TurnTime']);
        $this->assertSame(7.30, $response['bracket1StraightTime']);
        $this->assertSame('松尾宣邦', $response['bracket2RacerName']);
        $this->assertSame(6.75, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.86, $response['bracket2LapTime']);
        $this->assertSame(8.11, $response['bracket2TurnTime']);
        $this->assertSame(7.42, $response['bracket2StraightTime']);
        $this->assertSame('中渡修作', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.99, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.44, $response['bracket3StraightTime']);
        $this->assertSame('羽野諒', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.89, $response['bracket4LapTime']);
        $this->assertSame(8.22, $response['bracket4TurnTime']);
        $this->assertSame(7.39, $response['bracket4StraightTime']);
        $this->assertSame('坂井滉哉', $response['bracket5RacerName']);
        $this->assertSame(6.71, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(8.21, $response['bracket5TurnTime']);
        $this->assertSame(7.44, $response['bracket5StraightTime']);
        $this->assertSame('前田健太郎', $response['bracket6RacerName']);
        $this->assertSame(6.79, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket6LapTime']);
        $this->assertSame(7.98, $response['bracket6TurnTime']);
        $this->assertSame(7.51, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('中亮太', $response['bracket1RacerName']);
        $this->assertSame(6.71, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.04, $response['bracket1LapTime']);
        $this->assertSame(7.68, $response['bracket1TurnTime']);
        $this->assertSame(7.36, $response['bracket1StraightTime']);
        $this->assertSame('小川広大', $response['bracket2RacerName']);
        $this->assertSame(6.72, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.88, $response['bracket2LapTime']);
        $this->assertSame(8.06, $response['bracket2TurnTime']);
        $this->assertSame(7.43, $response['bracket2StraightTime']);
        $this->assertSame('松尾基成', $response['bracket3RacerName']);
        $this->assertSame(6.66, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.89, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame('塩田北斗', $response['bracket4RacerName']);
        $this->assertSame(6.62, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.61, $response['bracket4LapTime']);
        $this->assertSame(8.21, $response['bracket4TurnTime']);
        $this->assertSame(7.32, $response['bracket4StraightTime']);
        $this->assertSame('嘉手苅徹哉', $response['bracket5RacerName']);
        $this->assertSame(6.65, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.53, $response['bracket5LapTime']);
        $this->assertSame(8.37, $response['bracket5TurnTime']);
        $this->assertSame(7.40, $response['bracket5StraightTime']);
        $this->assertSame('田中京介', $response['bracket6RacerName']);
        $this->assertSame(6.68, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.33, $response['bracket6LapTime']);
        $this->assertSame(8.25, $response['bracket6TurnTime']);
        $this->assertSame(7.43, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('新開航', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('変わらずいい。枠番で調整をする', $response['bracket1RacerComment1']);
        $this->assertSame('松尾宣邦', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('直線は甘いが出足は上向いている', $response['bracket2RacerComment1']);
        $this->assertSame('中渡修作', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('※バランスがよく中堅上位に到達', $response['bracket3RacerComment1']);
        $this->assertSame('羽野諒', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('ペラとバルブ調整で体感が上向き', $response['bracket4RacerComment1']);
        $this->assertSame('坂井滉哉', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('下がる感じはないが出足が良くない', $response['bracket5RacerComment1']);
        $this->assertSame('前田健太郎', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('伸びが来ない。ターン重視でいく', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-01');
        $this->assertSame('中亮太', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('いい仕上がり。伸び、回り足がいい', $response['bracket1RacerComment1']);
        $this->assertSame('小川広大', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('S届いていたし乗った感じ良かった', $response['bracket2RacerComment1']);
        $this->assertSame('松尾基成', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('足はいいけど乗り味や押しが甘い', $response['bracket3RacerComment1']);
        $this->assertSame('塩田北斗', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('レース失敗だけで足は全然いいです', $response['bracket4RacerComment1']);
        $this->assertSame('嘉手苅徹哉', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('伸びはいいけどターンが良くない', $response['bracket5RacerComment1']);
        $this->assertSame('田中京介', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('出足寄りにして出口で押していた', $response['bracket6RacerComment1']);
    }
}
