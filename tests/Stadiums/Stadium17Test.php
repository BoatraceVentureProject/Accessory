<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium17;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium17Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium17
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
        $this->assertSame('田中辰彦', $response['bracket1RacerName']);
        $this->assertSame(6.65, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.52, $response['bracket1LapTime']);
        $this->assertSame(5.73, $response['bracket1TurnTime']);
        $this->assertSame(7.06, $response['bracket1StraightTime']);
        $this->assertSame('永田義紘', $response['bracket2RacerName']);
        $this->assertSame(6.72, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.69, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.11, $response['bracket2StraightTime']);
        $this->assertSame('角浜修', $response['bracket3RacerName']);
        $this->assertSame(6.71, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.23, $response['bracket3LapTime']);
        $this->assertSame(5.69, $response['bracket3TurnTime']);
        $this->assertSame(7.16, $response['bracket3StraightTime']);
        $this->assertSame('大原祥昌', $response['bracket4RacerName']);
        $this->assertSame(6.74, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.54, $response['bracket4LapTime']);
        $this->assertSame(5.59, $response['bracket4TurnTime']);
        $this->assertSame(7.08, $response['bracket4StraightTime']);
        $this->assertSame('下寺秀和', $response['bracket5RacerName']);
        $this->assertSame(6.69, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.25, $response['bracket5LapTime']);
        $this->assertSame(5.70, $response['bracket5TurnTime']);
        $this->assertSame(7.25, $response['bracket5StraightTime']);
        $this->assertSame('向井田直弥', $response['bracket6RacerName']);
        $this->assertSame(6.69, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.46, $response['bracket6LapTime']);
        $this->assertSame(5.64, $response['bracket6TurnTime']);
        $this->assertSame(7.22, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('池上隆行', $response['bracket1RacerName']);
        $this->assertSame(6.81, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.11, $response['bracket1LapTime']);
        $this->assertSame(5.90, $response['bracket1TurnTime']);
        $this->assertSame(7.23, $response['bracket1StraightTime']);
        $this->assertSame('大上卓人', $response['bracket2RacerName']);
        $this->assertSame(6.71, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.56, $response['bracket2LapTime']);
        $this->assertSame(5.44, $response['bracket2TurnTime']);
        $this->assertSame(7.13, $response['bracket2StraightTime']);
        $this->assertSame('別府昌樹', $response['bracket3RacerName']);
        $this->assertSame(6.85, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.25, $response['bracket3LapTime']);
        $this->assertSame(5.61, $response['bracket3TurnTime']);
        $this->assertSame(7.26, $response['bracket3StraightTime']);
        $this->assertSame('正木聖賢', $response['bracket4RacerName']);
        $this->assertSame(6.75, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.47, $response['bracket4LapTime']);
        $this->assertSame(5.65, $response['bracket4TurnTime']);
        $this->assertSame(7.38, $response['bracket4StraightTime']);
        $this->assertSame('木山和幸', $response['bracket5RacerName']);
        $this->assertSame(6.79, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.59, $response['bracket5LapTime']);
        $this->assertSame(5.73, $response['bracket5TurnTime']);
        $this->assertSame(7.25, $response['bracket5StraightTime']);
        $this->assertSame('三宅健太', $response['bracket6RacerName']);
        $this->assertSame(6.79, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.67, $response['bracket6LapTime']);
        $this->assertSame(5.83, $response['bracket6TurnTime']);
        $this->assertSame(7.31, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-01');
        $this->assertSame('田中辰彦', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('目立つ部分が無い足です。もう少しプロペラを調整します。', $response['bracket1RacerComment1']);
        $this->assertSame('永田義紘', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ターンする時の足が良い感じがします。このままでレースします。', $response['bracket2RacerComment1']);
        $this->assertSame('角浜修', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('中堅レベルの足で悪くないですね。伸びられる事もない。', $response['bracket3RacerComment1']);
        $this->assertSame('大原祥昌', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('エンジンは弱めなので、何か整備をしてみます。', $response['bracket4RacerComment1']);
        $this->assertSame('下寺秀和', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('伸びと出足のバランスが取れて、悪くない足です。', $response['bracket5RacerComment1']);
        $this->assertSame('向井田直弥', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('少し伸びが足りないけど、それ以外は悪くない感じです。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-01');
        $this->assertSame('池上隆行', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('行き足から伸びにかけて少し弱い。プロペラを調整してみる。', $response['bracket1RacerComment1']);
        $this->assertSame('大上卓人', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ターン出口の足が良いですね。プロペラの調整だけ続けます。', $response['bracket2RacerComment1']);
        $this->assertSame('別府昌樹', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('回転が合っていないので、プロペラを調整してみます。', $response['bracket3RacerComment1']);
        $this->assertSame('正木聖賢', $response['bracket4RacerName']);
        $this->assertSame('当日コメント', $response['bracket4RacerComment2Label']);
        $this->assertSame('プロペラを調整して、足は上向いてきています。12:49更新', $response['bracket4RacerComment2']);
        $this->assertSame('木山和幸', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('プロペラもそのままで、足は中堅レベルはあるよ。', $response['bracket5RacerComment1']);
        $this->assertSame('三宅健太', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('伸びが少し弱いですね。エンジン本体を整備してみます。', $response['bracket6RacerComment1']);
    }
}
