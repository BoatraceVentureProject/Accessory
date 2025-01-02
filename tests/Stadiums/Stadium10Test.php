<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium10;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium10Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium10
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
        $this->assertSame('大上卓人', $response['bracket1RacerName']);
        $this->assertSame(6.55, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.30, $response['bracket1LapTime']);
        $this->assertSame(5.07, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame('齋藤達希', $response['bracket2RacerName']);
        $this->assertSame(6.65, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.20, $response['bracket2LapTime']);
        $this->assertSame(5.40, $response['bracket2TurnTime']);
        $this->assertSame(6.72, $response['bracket2StraightTime']);
        $this->assertSame('本吉正樹', $response['bracket3RacerName']);
        $this->assertSame(6.63, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket3LapTime']);
        $this->assertSame(5.43, $response['bracket3TurnTime']);
        $this->assertSame(6.63, $response['bracket3StraightTime']);
        $this->assertSame('竹田吉行', $response['bracket4RacerName']);
        $this->assertSame(6.65, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.25, $response['bracket4LapTime']);
        $this->assertSame(5.53, $response['bracket4TurnTime']);
        $this->assertSame(6.67, $response['bracket4StraightTime']);
        $this->assertSame('松下誉士', $response['bracket5RacerName']);
        $this->assertSame(6.59, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.63, $response['bracket5LapTime']);
        $this->assertSame(5.38, $response['bracket5TurnTime']);
        $this->assertSame(6.62, $response['bracket5StraightTime']);
        $this->assertSame('籾山佳岳', $response['bracket6RacerName']);
        $this->assertSame(6.73, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.07, $response['bracket6LapTime']);
        $this->assertSame(5.50, $response['bracket6TurnTime']);
        $this->assertSame(6.70, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['bracket1RacerName']);
        $this->assertSame(6.67, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket1LapTime']);
        $this->assertSame(5.17, $response['bracket1TurnTime']);
        $this->assertSame(6.63, $response['bracket1StraightTime']);
        $this->assertSame('松本庸平', $response['bracket2RacerName']);
        $this->assertSame(6.55, $response['bracket2ExhibitionTime']);
        $this->assertSame(38.25, $response['bracket2LapTime']);
        $this->assertSame(5.65, $response['bracket2TurnTime']);
        $this->assertSame(6.77, $response['bracket2StraightTime']);
        $this->assertSame('古田祐貴', $response['bracket3RacerName']);
        $this->assertSame(6.65, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.27, $response['bracket3LapTime']);
        $this->assertSame(5.70, $response['bracket3TurnTime']);
        $this->assertSame(6.70, $response['bracket3StraightTime']);
        $this->assertSame('寺嶋雄', $response['bracket4RacerName']);
        $this->assertSame(6.63, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.95, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(6.70, $response['bracket4StraightTime']);
        $this->assertSame('本吉正樹', $response['bracket5RacerName']);
        $this->assertSame(6.67, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.62, $response['bracket5LapTime']);
        $this->assertSame(5.62, $response['bracket5TurnTime']);
        $this->assertSame(6.70, $response['bracket5StraightTime']);
        $this->assertSame('徳増秀樹', $response['bracket6RacerName']);
        $this->assertSame(6.63, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.63, $response['bracket6LapTime']);
        $this->assertSame(5.50, $response['bracket6TurnTime']);
        $this->assertSame(6.58, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-18');
        $this->assertSame('大上卓人', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('足悪くなさそうでまずはこのまま', $response['bracket1RacerComment1']);
        $this->assertSame('齋藤達希', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ペラ叩いて一瞬の出足は良かった', $response['bracket2RacerComment1']);
        $this->assertSame('本吉正樹', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['bracket3RacerComment1']);
        $this->assertSame('竹田吉行', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('モーターは良さそうだしペラから', $response['bracket4RacerComment1']);
        $this->assertSame('松下誉士', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('伸びる感じなくターン合ってない', $response['bracket5RacerComment1']);
        $this->assertSame('籾山佳岳', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('班の中で一番悪い感じがした', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('弱くはないけど普通くらいかな', $response['bracket1RacerComment1']);
        $this->assertSame('松本庸平', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('悪い感じなかったが乗心地不安定', $response['bracket2RacerComment1']);
        $this->assertSame('古田祐貴', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('このままでも戦えそうな感じした', $response['bracket3RacerComment1']);
        $this->assertSame('寺嶋雄', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('回転を合わせれば良くなりそう', $response['bracket4RacerComment1']);
        $this->assertSame('本吉正樹', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['bracket5RacerComment1']);
        $this->assertSame('徳増秀樹', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('ペラが合ってない感じ。色々やる', $response['bracket6RacerComment1']);
    }
}
