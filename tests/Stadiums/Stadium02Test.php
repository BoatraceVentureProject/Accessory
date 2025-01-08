<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium02;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium02Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium02
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
        $this->assertSame('関口智久', $response['bracket_1_racer_name']);
        $this->assertSame(6.73, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.67, $response['bracket_1_lap_time']);
        $this->assertSame(5.41, $response['bracket_1_turn_time']);
        $this->assertSame(7.08, $response['bracket_1_straight_time']);
        $this->assertSame('別府正幸', $response['bracket_2_racer_name']);
        $this->assertSame(6.71, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.10, $response['bracket_2_lap_time']);
        $this->assertSame(5.70, $response['bracket_2_turn_time']);
        $this->assertSame(7.01, $response['bracket_2_straight_time']);
        $this->assertSame('岡部哲', $response['bracket_3_racer_name']);
        $this->assertSame(6.77, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.33, $response['bracket_3_lap_time']);
        $this->assertSame(5.47, $response['bracket_3_turn_time']);
        $this->assertSame(7.14, $response['bracket_3_straight_time']);
        $this->assertSame('西村勝', $response['bracket_4_racer_name']);
        $this->assertSame(6.75, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.07, $response['bracket_4_lap_time']);
        $this->assertSame(5.50, $response['bracket_4_turn_time']);
        $this->assertSame(7.00, $response['bracket_4_straight_time']);
        $this->assertSame('滝沢芳行', $response['bracket_5_racer_name']);
        $this->assertSame(6.73, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.30, $response['bracket_5_lap_time']);
        $this->assertSame(5.60, $response['bracket_5_turn_time']);
        $this->assertSame(7.03, $response['bracket_5_straight_time']);
        $this->assertSame('鈴木孝明', $response['bracket_6_racer_name']);
        $this->assertSame(6.71, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.47, $response['bracket_6_lap_time']);
        $this->assertSame(5.70, $response['bracket_6_turn_time']);
        $this->assertSame(7.01, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 3, date: '2024-01-05');
        $this->assertSame('中村裕将', $response['bracket_1_racer_name']);
        $this->assertSame(6.77, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.08, $response['bracket_1_lap_time']);
        $this->assertSame(5.40, $response['bracket_1_turn_time']);
        $this->assertSame(7.14, $response['bracket_1_straight_time']);
        $this->assertSame('金子和之', $response['bracket_2_racer_name']);
        $this->assertSame(6.76, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.23, $response['bracket_2_lap_time']);
        $this->assertSame(5.53, $response['bracket_2_turn_time']);
        $this->assertSame(7.04, $response['bracket_2_straight_time']);
        $this->assertSame('山崎義明', $response['bracket_3_racer_name']);
        $this->assertSame(6.68, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.72, $response['bracket_3_lap_time']);
        $this->assertSame(5.37, $response['bracket_3_turn_time']);
        $this->assertSame(7.00, $response['bracket_3_straight_time']);
        $this->assertSame('松本純平', $response['bracket_4_racer_name']);
        $this->assertSame(6.70, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.13, $response['bracket_4_lap_time']);
        $this->assertSame(5.31, $response['bracket_4_turn_time']);
        $this->assertSame(7.00, $response['bracket_4_straight_time']);
        $this->assertSame('浅井翼', $response['bracket_5_racer_name']);
        $this->assertSame(6.69, $response['bracket_5_exhibition_time']);
        $this->assertSame(38.09, $response['bracket_5_lap_time']);
        $this->assertSame(6.00, $response['bracket_5_turn_time']);
        $this->assertSame(7.00, $response['bracket_5_straight_time']);
        $this->assertSame('中野希一', $response['bracket_6_racer_name']);
        $this->assertSame(6.89, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.10, $response['bracket_6_lap_time']);
        $this->assertSame(5.63, $response['bracket_6_turn_time']);
        $this->assertSame(7.07, $response['bracket_6_straight_time']);
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
