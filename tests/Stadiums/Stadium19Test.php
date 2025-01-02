<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium19;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium19Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium19
     */
    protected Stadium19 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium19(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket1RacerName']);
        $this->assertSame(6.81, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.57, $response['bracket1LapTime']);
        $this->assertSame(5.90, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame('新良一規', $response['bracket2RacerName']);
        $this->assertSame(6.77, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.24, $response['bracket2LapTime']);
        $this->assertSame(6.14, $response['bracket2TurnTime']);
        $this->assertSame(7.45, $response['bracket2StraightTime']);
        $this->assertSame('佐藤駿介', $response['bracket3RacerName']);
        $this->assertSame(6.81, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket3LapTime']);
        $this->assertSame(5.93, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame('岡部貴司', $response['bracket4RacerName']);
        $this->assertSame(6.89, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.64, $response['bracket4LapTime']);
        $this->assertSame(5.91, $response['bracket4TurnTime']);
        $this->assertSame(7.37, $response['bracket4StraightTime']);
        $this->assertSame('田中浩之', $response['bracket5RacerName']);
        $this->assertSame(6.82, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.92, $response['bracket5LapTime']);
        $this->assertSame(6.42, $response['bracket5TurnTime']);
        $this->assertSame(7.42, $response['bracket5StraightTime']);
        $this->assertSame('大田直弥', $response['bracket6RacerName']);
        $this->assertSame(6.82, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.98, $response['bracket6LapTime']);
        $this->assertSame(5.58, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-01');
        $this->assertSame('森田昭彦', $response['bracket1RacerName']);
        $this->assertSame(6.81, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.32, $response['bracket1LapTime']);
        $this->assertSame(5.48, $response['bracket1TurnTime']);
        $this->assertSame(7.28, $response['bracket1StraightTime']);
        $this->assertSame('片岡恵里', $response['bracket2RacerName']);
        $this->assertSame(6.74, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.53, $response['bracket2LapTime']);
        $this->assertSame(6.20, $response['bracket2TurnTime']);
        $this->assertSame(7.16, $response['bracket2StraightTime']);
        $this->assertSame('高濱芳久', $response['bracket3RacerName']);
        $this->assertSame(6.74, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.40, $response['bracket3LapTime']);
        $this->assertSame(5.60, $response['bracket3TurnTime']);
        $this->assertSame(7.34, $response['bracket3StraightTime']);
        $this->assertSame('岡本翔太郎', $response['bracket4RacerName']);
        $this->assertSame(6.77, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.70, $response['bracket4LapTime']);
        $this->assertSame(5.63, $response['bracket4TurnTime']);
        $this->assertSame(7.29, $response['bracket4StraightTime']);
        $this->assertSame('江本真治', $response['bracket5RacerName']);
        $this->assertSame(6.82, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.64, $response['bracket5LapTime']);
        $this->assertSame(5.51, $response['bracket5TurnTime']);
        $this->assertSame(7.31, $response['bracket5StraightTime']);
        $this->assertSame('柳生泰二', $response['bracket6RacerName']);
        $this->assertSame(6.81, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.68, $response['bracket6LapTime']);
        $this->assertSame(5.50, $response['bracket6TurnTime']);
        $this->assertSame(7.33, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('乗りやすいし、足もいい。出てる', $response['bracket1RacerComment1']);
        $this->assertSame('新良一規', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('レースしやすい。乗り心地もいい', $response['bracket2RacerComment1']);
        $this->assertSame('佐藤駿介', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('ゾーン狭いが合えば回り足はいい', $response['bracket3RacerComment1']);
        $this->assertSame('岡部貴司', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('調整はほぼしてないが足は上の方', $response['bracket4RacerComment1']);
        $this->assertSame('田中浩之', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('道中で競ってもやられることない', $response['bracket5RacerComment1']);
        $this->assertSame('大田直弥', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('新ペラに換わってから全部がダメ', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2024-01-01');
        $this->assertSame('森田昭彦', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('まあまあ。全体に普通はあります', $response['bracket1RacerComment1']);
        $this->assertSame('片岡恵里', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('握った反応とか、行き足いいです', $response['bracket2RacerComment1']);
        $this->assertSame('高濱芳久', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('ペラ調整して行き足から伸びいい', $response['bracket3RacerComment1']);
        $this->assertSame('岡本翔太郎', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('ペラ叩いて反応ある。乗りやすい', $response['bracket4RacerComment1']);
        $this->assertSame('江本真治', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('思い切った調整して悪くなかった', $response['bracket5RacerComment1']);
        $this->assertSame('柳生泰二', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('Sしっかり行けた。足も中堅ある', $response['bracket6RacerComment1']);
    }
}
