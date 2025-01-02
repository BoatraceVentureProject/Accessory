<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests\Stadiums;

use Boatrace\Sakura\Stadiums\Stadium11;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium11Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Sakura\Stadiums\Stadium11
     */
    protected Stadium11 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium11(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-03');
        $this->assertSame('山田晃大', $response['bracket1RacerName']);
        $this->assertSame(6.77, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.90, $response['bracket1LapTime']);
        $this->assertSame(5.28, $response['bracket1TurnTime']);
        $this->assertSame(7.98, $response['bracket1StraightTime']);
        $this->assertSame('市川健太', $response['bracket2RacerName']);
        $this->assertSame(6.65, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.67, $response['bracket2LapTime']);
        $this->assertSame(5.33, $response['bracket2TurnTime']);
        $this->assertSame(7.88, $response['bracket2StraightTime']);
        $this->assertSame('吉川晴人', $response['bracket3RacerName']);
        $this->assertSame(6.70, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.19, $response['bracket3LapTime']);
        $this->assertSame(5.40, $response['bracket3TurnTime']);
        $this->assertSame(8.03, $response['bracket3StraightTime']);
        $this->assertSame('和田操拓', $response['bracket4RacerName']);
        $this->assertSame(6.65, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.77, $response['bracket4TurnTime']);
        $this->assertSame(7.90, $response['bracket4StraightTime']);
        $this->assertSame('川島圭司', $response['bracket5RacerName']);
        $this->assertSame(6.69, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.29, $response['bracket5LapTime']);
        $this->assertSame(5.61, $response['bracket5TurnTime']);
        $this->assertSame(7.85, $response['bracket5StraightTime']);
        $this->assertSame('吉田和仁', $response['bracket6RacerName']);
        $this->assertSame(6.66, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.28, $response['bracket6LapTime']);
        $this->assertSame(5.62, $response['bracket6TurnTime']);
        $this->assertSame(7.68, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-01-03');
        $this->assertSame('松浦博人', $response['bracket1RacerName']);
        $this->assertSame(6.71, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.92, $response['bracket1LapTime']);
        $this->assertSame(5.25, $response['bracket1TurnTime']);
        $this->assertSame(7.89, $response['bracket1StraightTime']);
        $this->assertSame('藤井徹', $response['bracket2RacerName']);
        $this->assertSame(6.79, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.89, $response['bracket2LapTime']);
        $this->assertSame(5.61, $response['bracket2TurnTime']);
        $this->assertSame(8.04, $response['bracket2StraightTime']);
        $this->assertSame('鶴本崇文', $response['bracket3RacerName']);
        $this->assertSame(6.75, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.68, $response['bracket3LapTime']);
        $this->assertSame(5.72, $response['bracket3TurnTime']);
        $this->assertSame(7.90, $response['bracket3StraightTime']);
        $this->assertSame('吉川喜継', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.35, $response['bracket4LapTime']);
        $this->assertSame(5.68, $response['bracket4TurnTime']);
        $this->assertSame(7.87, $response['bracket4StraightTime']);
        $this->assertSame('渡邉英児', $response['bracket5RacerName']);
        $this->assertSame(6.71, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.36, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(7.80, $response['bracket5StraightTime']);
        $this->assertSame('香川陽太', $response['bracket6RacerName']);
        $this->assertSame(6.80, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.71, $response['bracket6LapTime']);
        $this->assertSame(5.39, $response['bracket6TurnTime']);
        $this->assertSame(8.02, $response['bracket6StraightTime']);
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
        $response = $this->stadium->comments(raceNumber: 2, date: '2024-01-03');
        $this->assertSame([], $response);
    }
}
