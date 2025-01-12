<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium05;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium05Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium05
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
        $this->assertSame('相原利章', $response['bracket_1_racer_name']);
        $this->assertSame(6.70, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.47, $response['bracket_1_lap_time']);
        $this->assertSame(6.07, $response['bracket_1_turn_time']);
        $this->assertSame(6.47, $response['bracket_1_straight_time']);
        $this->assertSame('橋口真樹', $response['bracket_2_racer_name']);
        $this->assertSame(6.66, $response['bracket_2_exhibition_time']);
        $this->assertSame(36.97, $response['bracket_2_lap_time']);
        $this->assertSame(6.03, $response['bracket_2_turn_time']);
        $this->assertSame(6.68, $response['bracket_2_straight_time']);
        $this->assertSame('青木蓮', $response['bracket_3_racer_name']);
        $this->assertSame(6.66, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.70, $response['bracket_3_lap_time']);
        $this->assertSame(5.63, $response['bracket_3_turn_time']);
        $this->assertSame(6.93, $response['bracket_3_straight_time']);
        $this->assertSame('佐藤航', $response['bracket_4_racer_name']);
        $this->assertSame(6.65, $response['bracket_4_exhibition_time']);
        $this->assertSame(36.44, $response['bracket_4_lap_time']);
        $this->assertSame(5.67, $response['bracket_4_turn_time']);
        $this->assertSame(6.87, $response['bracket_4_straight_time']);
        $this->assertSame('田中勇輔', $response['bracket_5_racer_name']);
        $this->assertSame(6.68, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.06, $response['bracket_5_lap_time']);
        $this->assertSame(5.57, $response['bracket_5_turn_time']);
        $this->assertSame(6.82, $response['bracket_5_straight_time']);
        $this->assertSame('坂本一真', $response['bracket_6_racer_name']);
        $this->assertSame(6.72, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.37, $response['bracket_6_lap_time']);
        $this->assertSame(5.93, $response['bracket_6_turn_time']);
        $this->assertSame(6.71, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-01-03');
        $this->assertSame('尾上雅也', $response['bracket_1_racer_name']);
        $this->assertSame(6.74, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.66, $response['bracket_1_lap_time']);
        $this->assertSame(5.81, $response['bracket_1_turn_time']);
        $this->assertSame(6.70, $response['bracket_1_straight_time']);
        $this->assertSame('川上聡介', $response['bracket_2_racer_name']);
        $this->assertSame(6.66, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.03, $response['bracket_2_lap_time']);
        $this->assertSame(6.09, $response['bracket_2_turn_time']);
        $this->assertSame(6.82, $response['bracket_2_straight_time']);
        $this->assertSame('相原利章', $response['bracket_3_racer_name']);
        $this->assertSame(6.83, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.27, $response['bracket_3_lap_time']);
        $this->assertSame(6.21, $response['bracket_3_turn_time']);
        $this->assertSame(6.71, $response['bracket_3_straight_time']);
        $this->assertSame('塚田修二', $response['bracket_4_racer_name']);
        $this->assertSame(6.63, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.08, $response['bracket_4_lap_time']);
        $this->assertSame(5.72, $response['bracket_4_turn_time']);
        $this->assertSame(6.80, $response['bracket_4_straight_time']);
        $this->assertSame('小澤和也', $response['bracket_5_racer_name']);
        $this->assertSame(6.80, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.23, $response['bracket_5_lap_time']);
        $this->assertSame(5.70, $response['bracket_5_turn_time']);
        $this->assertSame(6.95, $response['bracket_5_straight_time']);
        $this->assertSame('倉田茂将', $response['bracket_6_racer_name']);
        $this->assertSame(6.81, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.70, $response['bracket_6_lap_time']);
        $this->assertSame(5.59, $response['bracket_6_turn_time']);
        $this->assertSame(6.92, $response['bracket_6_straight_time']);
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
