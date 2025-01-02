<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium01;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium01Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium01
     */
    protected Stadium01 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium01(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-02');
        $this->assertSame('亀山高雅', $response['bracket1RacerName']);
        $this->assertSame(6.79, $response['bracket1ExhibitionTime']);
        $this->assertSame(18.34, $response['bracket1HalfLapTime']);
        $this->assertSame(4.37, $response['bracket1TurnTime']);
        $this->assertSame(7.58, $response['bracket1StraightTime']);
        $this->assertSame('生方靖亜', $response['bracket2RacerName']);
        $this->assertSame(6.79, $response['bracket2ExhibitionTime']);
        $this->assertSame(18.67, $response['bracket2HalfLapTime']);
        $this->assertSame(4.58, $response['bracket2TurnTime']);
        $this->assertSame(7.60, $response['bracket2StraightTime']);
        $this->assertSame('富澤祐作', $response['bracket3RacerName']);
        $this->assertSame(6.76, $response['bracket3ExhibitionTime']);
        $this->assertSame(18.64, $response['bracket3HalfLapTime']);
        $this->assertSame(4.44, $response['bracket3TurnTime']);
        $this->assertSame(7.76, $response['bracket3StraightTime']);
        $this->assertSame('佐口達也', $response['bracket4RacerName']);
        $this->assertSame(6.82, $response['bracket4ExhibitionTime']);
        $this->assertSame(18.81, $response['bracket4HalfLapTime']);
        $this->assertSame(4.45, $response['bracket4TurnTime']);
        $this->assertSame(7.70, $response['bracket4StraightTime']);
        $this->assertSame('柴田光', $response['bracket5RacerName']);
        $this->assertSame(6.81, $response['bracket5ExhibitionTime']);
        $this->assertSame(18.43, $response['bracket5HalfLapTime']);
        $this->assertSame(4.81, $response['bracket5TurnTime']);
        $this->assertSame(7.58, $response['bracket5StraightTime']);
        $this->assertSame('鳥居塚孝博', $response['bracket6RacerName']);
        $this->assertSame(6.70, $response['bracket6ExhibitionTime']);
        $this->assertSame(18.45, $response['bracket6HalfLapTime']);
        $this->assertSame(4.91, $response['bracket6TurnTime']);
        $this->assertSame(7.65, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 12, date: '2024-01-02');
        $this->assertSame('毒島誠', $response['bracket1RacerName']);
        $this->assertSame(6.57, $response['bracket1ExhibitionTime']);
        $this->assertSame(18.00, $response['bracket1HalfLapTime']);
        $this->assertSame(4.25, $response['bracket1TurnTime']);
        $this->assertSame(7.51, $response['bracket1StraightTime']);
        $this->assertSame('久田敏之', $response['bracket2RacerName']);
        $this->assertSame(6.79, $response['bracket2ExhibitionTime']);
        $this->assertSame(18.45, $response['bracket2HalfLapTime']);
        $this->assertSame(4.44, $response['bracket2TurnTime']);
        $this->assertSame(7.58, $response['bracket2StraightTime']);
        $this->assertSame('関浩哉', $response['bracket3RacerName']);
        $this->assertSame(6.69, $response['bracket3ExhibitionTime']);
        $this->assertSame(18.52, $response['bracket3HalfLapTime']);
        $this->assertSame(4.35, $response['bracket3TurnTime']);
        $this->assertSame(7.67, $response['bracket3StraightTime']);
        $this->assertSame('江口晃生', $response['bracket4RacerName']);
        $this->assertSame(6.75, $response['bracket4ExhibitionTime']);
        $this->assertSame(18.67, $response['bracket4HalfLapTime']);
        $this->assertSame(4.63, $response['bracket4TurnTime']);
        $this->assertSame(7.58, $response['bracket4StraightTime']);
        $this->assertSame('土屋智則', $response['bracket5RacerName']);
        $this->assertSame(6.77, $response['bracket5ExhibitionTime']);
        $this->assertSame(18.45, $response['bracket5HalfLapTime']);
        $this->assertSame(4.53, $response['bracket5TurnTime']);
        $this->assertSame(7.51, $response['bracket5StraightTime']);
        $this->assertSame('椎名豊', $response['bracket6RacerName']);
        $this->assertSame(6.67, $response['bracket6ExhibitionTime']);
        $this->assertSame(18.68, $response['bracket6HalfLapTime']);
        $this->assertSame(4.70, $response['bracket6TurnTime']);
        $this->assertSame(7.50, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-02');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 12, date: '2024-01-02');
        $this->assertSame([], $response);
    }
}
