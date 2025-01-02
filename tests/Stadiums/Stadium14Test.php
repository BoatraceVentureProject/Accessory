<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium14;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium14Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium14
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
        $this->assertSame('市橋卓士', $response['bracket1RacerName']);
        $this->assertSame(6.89, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.39, $response['bracket1LapTime']);
        $this->assertSame(5.67, $response['bracket1TurnTime']);
        $this->assertSame(6.88, $response['bracket1StraightTime']);
        $this->assertSame('武田信一', $response['bracket2RacerName']);
        $this->assertSame(6.94, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.17, $response['bracket2LapTime']);
        $this->assertSame(5.86, $response['bracket2TurnTime']);
        $this->assertSame(7.20, $response['bracket2StraightTime']);
        $this->assertSame('井手良太', $response['bracket3RacerName']);
        $this->assertSame(6.96, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.10, $response['bracket3LapTime']);
        $this->assertSame(5.87, $response['bracket3TurnTime']);
        $this->assertSame(7.07, $response['bracket3StraightTime']);
        $this->assertSame('松本弓雄', $response['bracket4RacerName']);
        $this->assertSame(6.92, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.08, $response['bracket4StraightTime']);
        $this->assertSame('笠雅雄', $response['bracket5RacerName']);
        $this->assertSame(6.97, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.97, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(6.91, $response['bracket5StraightTime']);
        $this->assertSame('赤池修平', $response['bracket6RacerName']);
        $this->assertSame(6.99, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.90, $response['bracket6LapTime']);
        $this->assertSame(7.30, $response['bracket6TurnTime']);
        $this->assertSame(6.80, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('葛原大陽', $response['bracket1RacerName']);
        $this->assertSame(6.94, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.80, $response['bracket1LapTime']);
        $this->assertSame(5.63, $response['bracket1TurnTime']);
        $this->assertSame(7.07, $response['bracket1StraightTime']);
        $this->assertSame('渡辺崇', $response['bracket2RacerName']);
        $this->assertSame(6.87, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('西野雄貴', $response['bracket3RacerName']);
        $this->assertSame(6.92, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.27, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.00, $response['bracket3StraightTime']);
        $this->assertSame('垂水悠', $response['bracket4RacerName']);
        $this->assertSame(6.83, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.43, $response['bracket4LapTime']);
        $this->assertSame(5.87, $response['bracket4TurnTime']);
        $this->assertSame(6.93, $response['bracket4StraightTime']);
        $this->assertSame('齊藤優', $response['bracket5RacerName']);
        $this->assertSame(6.93, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket5LapTime']);
        $this->assertSame(5.43, $response['bracket5TurnTime']);
        $this->assertSame(7.03, $response['bracket5StraightTime']);
        $this->assertSame('田村慶', $response['bracket6RacerName']);
        $this->assertSame(6.97, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.77, $response['bracket6LapTime']);
        $this->assertSame(5.57, $response['bracket6TurnTime']);
        $this->assertSame(7.00, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('市橋卓士', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('初日と変わらず、完全な伸び型', $response['bracket1RacerComment1']);
        $this->assertSame('武田信一', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ペラの微調整ぐらいで変わらない', $response['bracket2RacerComment1']);
        $this->assertSame('井手良太', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('後半が今節では一番ましだった', $response['bracket3RacerComment1']);
        $this->assertSame('松本弓雄', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('まだ調整が合ってなく、ずれている', $response['bracket4RacerComment1']);
        $this->assertSame('笠雅雄', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('足は悪くないけど、乗り心地が課題', $response['bracket5RacerComment1']);
        $this->assertSame('赤池修平', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('少し回す方向でグリップはしていた', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('葛原大陽', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('まだビシッとは合ってなくペラ調整を', $response['bracket1RacerComment1']);
        $this->assertSame('渡辺崇', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ペラ調整をしてもしっくりきていない', $response['bracket2RacerComment1']);
        $this->assertSame('西野雄貴', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('調整でポーンと良くなる感じもある', $response['bracket3RacerComment1']);
        $this->assertSame('垂水悠', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('チルトを跳ねても足は良かったけど…', $response['bracket4RacerComment1']);
        $this->assertSame('齊藤優', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('安定板がついても、戦える足はある', $response['bracket5RacerComment1']);
        $this->assertSame('田村慶', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('ペラ調整だけで全体的に上積みできた', $response['bracket6RacerComment1']);
    }
}
