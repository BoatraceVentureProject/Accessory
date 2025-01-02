<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium02;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium02Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium02
     */
    protected Stadium02 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium02(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-05');
        $this->assertSame('関口智久', $response['bracket1RacerName']);
        $this->assertSame(6.73, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.67, $response['bracket1LapTime']);
        $this->assertSame(5.41, $response['bracket1TurnTime']);
        $this->assertSame(7.08, $response['bracket1StraightTime']);
        $this->assertSame('別府正幸', $response['bracket2RacerName']);
        $this->assertSame(6.71, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.10, $response['bracket2LapTime']);
        $this->assertSame(5.70, $response['bracket2TurnTime']);
        $this->assertSame(7.01, $response['bracket2StraightTime']);
        $this->assertSame('岡部哲', $response['bracket3RacerName']);
        $this->assertSame(6.77, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.33, $response['bracket3LapTime']);
        $this->assertSame(5.47, $response['bracket3TurnTime']);
        $this->assertSame(7.14, $response['bracket3StraightTime']);
        $this->assertSame('西村勝', $response['bracket4RacerName']);
        $this->assertSame(6.75, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.07, $response['bracket4LapTime']);
        $this->assertSame(5.50, $response['bracket4TurnTime']);
        $this->assertSame(7.00, $response['bracket4StraightTime']);
        $this->assertSame('滝沢芳行', $response['bracket5RacerName']);
        $this->assertSame(6.73, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.30, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(7.03, $response['bracket5StraightTime']);
        $this->assertSame('鈴木孝明', $response['bracket6RacerName']);
        $this->assertSame(6.71, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.47, $response['bracket6LapTime']);
        $this->assertSame(5.70, $response['bracket6TurnTime']);
        $this->assertSame(7.01, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-05');
        $this->assertSame('中村裕将', $response['bracket1RacerName']);
        $this->assertSame(6.77, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.08, $response['bracket1LapTime']);
        $this->assertSame(5.40, $response['bracket1TurnTime']);
        $this->assertSame(7.14, $response['bracket1StraightTime']);
        $this->assertSame('金子和之', $response['bracket2RacerName']);
        $this->assertSame(6.76, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.23, $response['bracket2LapTime']);
        $this->assertSame(5.53, $response['bracket2TurnTime']);
        $this->assertSame(7.04, $response['bracket2StraightTime']);
        $this->assertSame('山崎義明', $response['bracket3RacerName']);
        $this->assertSame(6.68, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.37, $response['bracket3TurnTime']);
        $this->assertSame(7.00, $response['bracket3StraightTime']);
        $this->assertSame('松本純平', $response['bracket4RacerName']);
        $this->assertSame(6.70, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.13, $response['bracket4LapTime']);
        $this->assertSame(5.31, $response['bracket4TurnTime']);
        $this->assertSame(7.00, $response['bracket4StraightTime']);
        $this->assertSame('浅井翼', $response['bracket5RacerName']);
        $this->assertSame(6.69, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.09, $response['bracket5LapTime']);
        $this->assertSame(6.00, $response['bracket5TurnTime']);
        $this->assertSame(7.00, $response['bracket5StraightTime']);
        $this->assertSame('中野希一', $response['bracket6RacerName']);
        $this->assertSame(6.89, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.10, $response['bracket6LapTime']);
        $this->assertSame(5.63, $response['bracket6TurnTime']);
        $this->assertSame(7.07, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-05');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 3, date: '2024-01-05');
        $this->assertSame([], $response);
    }
}
