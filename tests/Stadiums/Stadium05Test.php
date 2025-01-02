<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium05;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium05Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium05
     */
    protected Stadium05 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium05(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('相原利章', $response['bracket1RacerName']);
        $this->assertSame(6.70, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.47, $response['bracket1LapTime']);
        $this->assertSame(6.07, $response['bracket1TurnTime']);
        $this->assertSame(6.47, $response['bracket1StraightTime']);
        $this->assertSame('橋口真樹', $response['bracket2RacerName']);
        $this->assertSame(6.66, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.97, $response['bracket2LapTime']);
        $this->assertSame(6.03, $response['bracket2TurnTime']);
        $this->assertSame(6.68, $response['bracket2StraightTime']);
        $this->assertSame('青木蓮', $response['bracket3RacerName']);
        $this->assertSame(6.66, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.70, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(6.93, $response['bracket3StraightTime']);
        $this->assertSame('佐藤航', $response['bracket4RacerName']);
        $this->assertSame(6.65, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.44, $response['bracket4LapTime']);
        $this->assertSame(5.67, $response['bracket4TurnTime']);
        $this->assertSame(6.87, $response['bracket4StraightTime']);
        $this->assertSame('田中勇輔', $response['bracket5RacerName']);
        $this->assertSame(6.68, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.06, $response['bracket5LapTime']);
        $this->assertSame(5.57, $response['bracket5TurnTime']);
        $this->assertSame(6.82, $response['bracket5StraightTime']);
        $this->assertSame('坂本一真', $response['bracket6RacerName']);
        $this->assertSame(6.72, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.37, $response['bracket6LapTime']);
        $this->assertSame(5.93, $response['bracket6TurnTime']);
        $this->assertSame(6.71, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-01-03');
        $this->assertSame('尾上雅也', $response['bracket1RacerName']);
        $this->assertSame(6.74, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.66, $response['bracket1LapTime']);
        $this->assertSame(5.81, $response['bracket1TurnTime']);
        $this->assertSame(6.70, $response['bracket1StraightTime']);
        $this->assertSame('川上聡介', $response['bracket2RacerName']);
        $this->assertSame(6.66, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket2LapTime']);
        $this->assertSame(6.09, $response['bracket2TurnTime']);
        $this->assertSame(6.82, $response['bracket2StraightTime']);
        $this->assertSame('相原利章', $response['bracket3RacerName']);
        $this->assertSame(6.83, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.27, $response['bracket3LapTime']);
        $this->assertSame(6.21, $response['bracket3TurnTime']);
        $this->assertSame(6.71, $response['bracket3StraightTime']);
        $this->assertSame('塚田修二', $response['bracket4RacerName']);
        $this->assertSame(6.63, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.08, $response['bracket4LapTime']);
        $this->assertSame(5.72, $response['bracket4TurnTime']);
        $this->assertSame(6.80, $response['bracket4StraightTime']);
        $this->assertSame('小澤和也', $response['bracket5RacerName']);
        $this->assertSame(6.80, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.23, $response['bracket5LapTime']);
        $this->assertSame(5.70, $response['bracket5TurnTime']);
        $this->assertSame(6.95, $response['bracket5StraightTime']);
        $this->assertSame('倉田茂将', $response['bracket6RacerName']);
        $this->assertSame(6.81, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.70, $response['bracket6LapTime']);
        $this->assertSame(5.59, $response['bracket6TurnTime']);
        $this->assertSame(6.92, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 10, date: '2024-01-03');
        $this->assertSame([], $response);
    }
}
