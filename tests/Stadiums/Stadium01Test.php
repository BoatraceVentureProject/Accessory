<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium01;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium01Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium01
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
        $this->assertSame('亀山高雅', $response['bracket_1_racer_name']);
        $this->assertSame(6.79, $response['bracket_1_exhibition_time']);
        $this->assertSame(18.34, $response['bracket_1_half_lap_time']);
        $this->assertSame(4.37, $response['bracket_1_turn_time']);
        $this->assertSame(7.58, $response['bracket_1_straight_time']);
        $this->assertSame('生方靖亜', $response['bracket_2_racer_name']);
        $this->assertSame(6.79, $response['bracket_2_exhibition_time']);
        $this->assertSame(18.67, $response['bracket_2_half_lap_time']);
        $this->assertSame(4.58, $response['bracket_2_turn_time']);
        $this->assertSame(7.60, $response['bracket_2_straight_time']);
        $this->assertSame('富澤祐作', $response['bracket_3_racer_name']);
        $this->assertSame(6.76, $response['bracket_3_exhibition_time']);
        $this->assertSame(18.64, $response['bracket_3_half_lap_time']);
        $this->assertSame(4.44, $response['bracket_3_turn_time']);
        $this->assertSame(7.76, $response['bracket_3_straight_time']);
        $this->assertSame('佐口達也', $response['bracket_4_racer_name']);
        $this->assertSame(6.82, $response['bracket_4_exhibition_time']);
        $this->assertSame(18.81, $response['bracket_4_half_lap_time']);
        $this->assertSame(4.45, $response['bracket_4_turn_time']);
        $this->assertSame(7.70, $response['bracket_4_straight_time']);
        $this->assertSame('柴田光', $response['bracket_5_racer_name']);
        $this->assertSame(6.81, $response['bracket_5_exhibition_time']);
        $this->assertSame(18.43, $response['bracket_5_half_lap_time']);
        $this->assertSame(4.81, $response['bracket_5_turn_time']);
        $this->assertSame(7.58, $response['bracket_5_straight_time']);
        $this->assertSame('鳥居塚孝博', $response['bracket_6_racer_name']);
        $this->assertSame(6.70, $response['bracket_6_exhibition_time']);
        $this->assertSame(18.45, $response['bracket_6_half_lap_time']);
        $this->assertSame(4.91, $response['bracket_6_turn_time']);
        $this->assertSame(7.65, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 12, date: '2024-01-02');
        $this->assertSame('毒島誠', $response['bracket_1_racer_name']);
        $this->assertSame(6.57, $response['bracket_1_exhibition_time']);
        $this->assertSame(18.00, $response['bracket_1_half_lap_time']);
        $this->assertSame(4.25, $response['bracket_1_turn_time']);
        $this->assertSame(7.51, $response['bracket_1_straight_time']);
        $this->assertSame('久田敏之', $response['bracket_2_racer_name']);
        $this->assertSame(6.79, $response['bracket_2_exhibition_time']);
        $this->assertSame(18.45, $response['bracket_2_half_lap_time']);
        $this->assertSame(4.44, $response['bracket_2_turn_time']);
        $this->assertSame(7.58, $response['bracket_2_straight_time']);
        $this->assertSame('関浩哉', $response['bracket_3_racer_name']);
        $this->assertSame(6.69, $response['bracket_3_exhibition_time']);
        $this->assertSame(18.52, $response['bracket_3_half_lap_time']);
        $this->assertSame(4.35, $response['bracket_3_turn_time']);
        $this->assertSame(7.67, $response['bracket_3_straight_time']);
        $this->assertSame('江口晃生', $response['bracket_4_racer_name']);
        $this->assertSame(6.75, $response['bracket_4_exhibition_time']);
        $this->assertSame(18.67, $response['bracket_4_half_lap_time']);
        $this->assertSame(4.63, $response['bracket_4_turn_time']);
        $this->assertSame(7.58, $response['bracket_4_straight_time']);
        $this->assertSame('土屋智則', $response['bracket_5_racer_name']);
        $this->assertSame(6.77, $response['bracket_5_exhibition_time']);
        $this->assertSame(18.45, $response['bracket_5_half_lap_time']);
        $this->assertSame(4.53, $response['bracket_5_turn_time']);
        $this->assertSame(7.51, $response['bracket_5_straight_time']);
        $this->assertSame('椎名豊', $response['bracket_6_racer_name']);
        $this->assertSame(6.67, $response['bracket_6_exhibition_time']);
        $this->assertSame(18.68, $response['bracket_6_half_lap_time']);
        $this->assertSame(4.70, $response['bracket_6_turn_time']);
        $this->assertSame(7.50, $response['bracket_6_straight_time']);
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
