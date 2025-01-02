<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Tests;

use Boatrace\Sakura\Accessory;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class AccessoryTest extends PHPUnitTestCase
{
    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = Accessory::times(stadiumId: 1, raceNumber: 1, date: '2024-01-02');
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
        $response = Accessory::times(stadiumId: 2, raceNumber: 1, date: '2024-01-05');
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
    public function testTimes05(): void
    {
        $response = Accessory::times(stadiumId: 5, raceNumber: 1, date: '2024-01-03');
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
    public function testTimes06(): void
    {
        $response = Accessory::times(stadiumId: 6, raceNumber: 1, date: '2024-11-01');
        $this->assertSame('星栄爾', $response['bracket1RacerName']);
        $this->assertSame(6.70, $response['bracket1ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket1LapTime']);
        $this->assertSame(5.60, $response['bracket1TurnTime']);
        $this->assertSame(7.69, $response['bracket1StraightTime']);
        $this->assertSame('吉武真也', $response['bracket2RacerName']);
        $this->assertSame(6.66, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.71, $response['bracket2LapTime']);
        $this->assertSame(5.90, $response['bracket2TurnTime']);
        $this->assertSame(7.63, $response['bracket2StraightTime']);
        $this->assertSame('小川時光', $response['bracket3RacerName']);
        $this->assertSame(6.67, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.48, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.73, $response['bracket3StraightTime']);
        $this->assertSame('尾道佳諭', $response['bracket4RacerName']);
        $this->assertSame(6.63, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.59, $response['bracket4LapTime']);
        $this->assertSame(5.57, $response['bracket4TurnTime']);
        $this->assertSame(7.73, $response['bracket4StraightTime']);
        $this->assertSame('土井祥伍', $response['bracket5RacerName']);
        $this->assertSame(6.67, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.30, $response['bracket5LapTime']);
        $this->assertSame(5.77, $response['bracket5TurnTime']);
        $this->assertSame(7.70, $response['bracket5StraightTime']);
        $this->assertSame('大島隆乃介', $response['bracket6RacerName']);
        $this->assertSame(6.69, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.27, $response['bracket6LapTime']);
        $this->assertSame(5.53, $response['bracket6TurnTime']);
        $this->assertSame(7.70, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes07(): void
    {
        $response = Accessory::times(stadiumId: 7, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('吉田裕平', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.10, $response['bracket1LapTime']);
        $this->assertSame(4.86, $response['bracket1TurnTime']);
        $this->assertSame(6.10, $response['bracket1StraightTime']);
        $this->assertSame('樅山拓馬', $response['bracket2RacerName']);
        $this->assertSame(6.76, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.09, $response['bracket2LapTime']);
        $this->assertSame(5.12, $response['bracket2TurnTime']);
        $this->assertSame(6.28, $response['bracket2StraightTime']);
        $this->assertSame('服部達哉', $response['bracket3RacerName']);
        $this->assertSame(6.69, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.72, $response['bracket3LapTime']);
        $this->assertSame(5.50, $response['bracket3TurnTime']);
        $this->assertSame(6.18, $response['bracket3StraightTime']);
        $this->assertSame('宇野博之', $response['bracket4RacerName']);
        $this->assertSame(6.74, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.12, $response['bracket4LapTime']);
        $this->assertSame(5.58, $response['bracket4TurnTime']);
        $this->assertSame(6.23, $response['bracket4StraightTime']);
        $this->assertSame('沼田大都', $response['bracket5RacerName']);
        $this->assertSame(6.66, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.05, $response['bracket5LapTime']);
        $this->assertSame(5.84, $response['bracket5TurnTime']);
        $this->assertSame(5.93, $response['bracket5StraightTime']);
        $this->assertSame('仲道大輔', $response['bracket6RacerName']);
        $this->assertSame(6.58, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.82, $response['bracket6LapTime']);
        $this->assertSame(5.41, $response['bracket6TurnTime']);
        $this->assertSame(6.14, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes10(): void
    {
        $response = Accessory::times(stadiumId: 10, raceNumber: 1, date: '2024-01-18');
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
    public function testTimes11(): void
    {
        $response = Accessory::times(stadiumId: 11, raceNumber: 1, date: '2024-01-03');
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
    public function testTimes13(): void
    {
        $response = Accessory::times(stadiumId: 13, raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket1RacerName']);
        $this->assertSame(7.08, $response['bracket1ExhibitionTime']);
        $this->assertSame(38.01, $response['bracket1LapTime']);
        $this->assertSame(11.67, $response['bracket1TurnTime']);
        $this->assertSame('鋤柄貴俊', $response['bracket2RacerName']);
        $this->assertSame(7.13, $response['bracket2ExhibitionTime']);
        $this->assertSame(38.10, $response['bracket2LapTime']);
        $this->assertSame(11.89, $response['bracket2TurnTime']);
        $this->assertSame('一瀬明', $response['bracket3RacerName']);
        $this->assertSame(7.08, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.64, $response['bracket3LapTime']);
        $this->assertSame(11.72, $response['bracket3TurnTime']);
        $this->assertSame('勝野竜司', $response['bracket4RacerName']);
        $this->assertSame(7.05, $response['bracket4ExhibitionTime']);
        $this->assertSame(38.49, $response['bracket4LapTime']);
        $this->assertSame(11.90, $response['bracket4TurnTime']);
        $this->assertSame('松浦博人', $response['bracket5RacerName']);
        $this->assertSame(7.07, $response['bracket5ExhibitionTime']);
        $this->assertSame(38.25, $response['bracket5LapTime']);
        $this->assertSame(11.63, $response['bracket5TurnTime']);
        $this->assertSame('高倉孝太', $response['bracket6RacerName']);
        $this->assertSame(7.02, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.02, $response['bracket6LapTime']);
        $this->assertSame(11.74, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes14(): void
    {
        $response = Accessory::times(stadiumId: 14, raceNumber: 1, date: '2024-01-01');
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
    public function testTimes16(): void
    {
        $response = Accessory::times(stadiumId: 16, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('浮田圭浩', $response['bracket1RacerName']);
        $this->assertSame(6.70, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket1LapTime']);
        $this->assertSame(5.85, $response['bracket1TurnTime']);
        $this->assertSame(6.53, $response['bracket1StraightTime']);
        $this->assertSame('阪本勇介', $response['bracket2RacerName']);
        $this->assertSame(6.64, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.63, $response['bracket2LapTime']);
        $this->assertSame(5.37, $response['bracket2TurnTime']);
        $this->assertSame(6.63, $response['bracket2StraightTime']);
        $this->assertSame('福田理', $response['bracket3RacerName']);
        $this->assertSame(6.78, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.92, $response['bracket3LapTime']);
        $this->assertSame(5.53, $response['bracket3TurnTime']);
        $this->assertSame(6.77, $response['bracket3StraightTime']);
        $this->assertSame('峰重力也', $response['bracket4RacerName']);
        $this->assertSame(6.79, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.38, $response['bracket4LapTime']);
        $this->assertSame(5.63, $response['bracket4TurnTime']);
        $this->assertSame(6.67, $response['bracket4StraightTime']);
        $this->assertSame('立間充宏', $response['bracket5RacerName']);
        $this->assertSame(6.72, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.60, $response['bracket5TurnTime']);
        $this->assertSame(6.63, $response['bracket5StraightTime']);
        $this->assertSame('山下昂大', $response['bracket6RacerName']);
        $this->assertSame(6.82, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.70, $response['bracket6LapTime']);
        $this->assertSame(5.77, $response['bracket6TurnTime']);
        $this->assertSame(6.77, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes17(): void
    {
        $response = Accessory::times(stadiumId: 17, raceNumber: 1, date: '2024-01-01');
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
    public function testTimes18(): void
    {
        $response = Accessory::times(stadiumId: 18, raceNumber: 1, date: '2025-01-01');
        $this->assertSame('末永祐輝', $response['bracket1RacerName']);
        $this->assertSame(6.82, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.61, $response['bracket1LapTime']);
        $this->assertSame(11.33, $response['bracket1TurnTime']);
        $this->assertSame('金子順一', $response['bracket2RacerName']);
        $this->assertSame(6.84, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.35, $response['bracket2LapTime']);
        $this->assertSame(11.62	, $response['bracket2TurnTime']);
        $this->assertSame('石倉拓美', $response['bracket3RacerName']);
        $this->assertSame(6.92, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.78, $response['bracket3LapTime']);
        $this->assertSame(11.96, $response['bracket3TurnTime']);
        $this->assertSame('花本剛', $response['bracket4RacerName']);
        $this->assertSame(6.94, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.39, $response['bracket4LapTime']);
        $this->assertSame(11.67, $response['bracket4TurnTime']);
        $this->assertSame('加木郁', $response['bracket5RacerName']);
        $this->assertSame(6.87, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(11.55, $response['bracket5TurnTime']);
        $this->assertSame('藤本佳史', $response['bracket6RacerName']);
        $this->assertSame(6.97, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.60, $response['bracket6LapTime']);
        $this->assertSame(11.59, $response['bracket6TurnTime']);
    }

    /**
     * @return void
     */
    public function testTimes19(): void
    {
        $response = Accessory::times(stadiumId: 19, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket1RacerName']);
        $this->assertSame(6.81, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.57, $response['bracket1LapTime']);
        $this->assertSame(5.90, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame('新良一規', $response['bracket2RacerName']);
        $this->assertSame(6.77, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.24, $response['bracket2LapTime']);
        $this->assertSame(6.14, $response['bracket2TurnTime']);
        $this->assertSame(7.45, $response['bracket2StraightTime']);
        $this->assertSame('佐藤駿介', $response['bracket3RacerName']);
        $this->assertSame(6.81, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.03, $response['bracket3LapTime']);
        $this->assertSame(5.93, $response['bracket3TurnTime']);
        $this->assertSame(7.39, $response['bracket3StraightTime']);
        $this->assertSame('岡部貴司', $response['bracket4RacerName']);
        $this->assertSame(6.89, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.64, $response['bracket4LapTime']);
        $this->assertSame(5.91, $response['bracket4TurnTime']);
        $this->assertSame(7.37, $response['bracket4StraightTime']);
        $this->assertSame('田中浩之', $response['bracket5RacerName']);
        $this->assertSame(6.82, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.92, $response['bracket5LapTime']);
        $this->assertSame(6.42, $response['bracket5TurnTime']);
        $this->assertSame(7.42, $response['bracket5StraightTime']);
        $this->assertSame('大田直弥', $response['bracket6RacerName']);
        $this->assertSame(6.82, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.98, $response['bracket6LapTime']);
        $this->assertSame(5.58, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes21(): void
    {
        $response = Accessory::times(stadiumId: 21, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('新開航', $response['bracket1RacerName']);
        $this->assertSame(6.63, $response['bracket1ExhibitionTime']);
        $this->assertSame(35.62, $response['bracket1LapTime']);
        $this->assertSame(7.66, $response['bracket1TurnTime']);
        $this->assertSame(7.30, $response['bracket1StraightTime']);
        $this->assertSame('松尾宣邦', $response['bracket2RacerName']);
        $this->assertSame(6.75, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.86, $response['bracket2LapTime']);
        $this->assertSame(8.11, $response['bracket2TurnTime']);
        $this->assertSame(7.42, $response['bracket2StraightTime']);
        $this->assertSame('中渡修作', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.99, $response['bracket3LapTime']);
        $this->assertSame(8.09, $response['bracket3TurnTime']);
        $this->assertSame(7.44, $response['bracket3StraightTime']);
        $this->assertSame('羽野諒', $response['bracket4RacerName']);
        $this->assertSame(6.73, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.89, $response['bracket4LapTime']);
        $this->assertSame(8.22, $response['bracket4TurnTime']);
        $this->assertSame(7.39, $response['bracket4StraightTime']);
        $this->assertSame('坂井滉哉', $response['bracket5RacerName']);
        $this->assertSame(6.71, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.41, $response['bracket5LapTime']);
        $this->assertSame(8.21, $response['bracket5TurnTime']);
        $this->assertSame(7.44, $response['bracket5StraightTime']);
        $this->assertSame('前田健太郎', $response['bracket6RacerName']);
        $this->assertSame(6.79, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket6LapTime']);
        $this->assertSame(7.98, $response['bracket6TurnTime']);
        $this->assertSame(7.51, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes22(): void
    {
        $response = Accessory::times(stadiumId: 22, raceNumber: 1, date: '2024-01-03');
        $this->assertSame('益田啓司', $response['bracket1RacerName']);
        $this->assertSame(6.87, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.49, $response['bracket1LapTime']);
        $this->assertSame(5.53, $response['bracket1TurnTime']);
        $this->assertSame(7.67, $response['bracket1StraightTime']);
        $this->assertSame('篠原飛翔', $response['bracket2RacerName']);
        $this->assertSame(6.84, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.64, $response['bracket2LapTime']);
        $this->assertSame(5.65, $response['bracket2TurnTime']);
        $this->assertSame(7.53, $response['bracket2StraightTime']);
        $this->assertSame('藤森陸斗', $response['bracket3RacerName']);
        $this->assertSame(6.86, $response['bracket3ExhibitionTime']);
        $this->assertSame(37.17, $response['bracket3LapTime']);
        $this->assertSame(5.63, $response['bracket3TurnTime']);
        $this->assertSame(7.50, $response['bracket3StraightTime']);
        $this->assertSame('森晋太郎', $response['bracket4RacerName']);
        $this->assertSame(6.90, $response['bracket4ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket4LapTime']);
        $this->assertSame(5.70, $response['bracket4TurnTime']);
        $this->assertSame(7.60, $response['bracket4StraightTime']);
        $this->assertSame('梶原正', $response['bracket5RacerName']);
        $this->assertSame(6.93, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.50, $response['bracket5LapTime']);
        $this->assertSame(5.80, $response['bracket5TurnTime']);
        $this->assertSame(7.77, $response['bracket5StraightTime']);
        $this->assertSame('桂林寛', $response['bracket6RacerName']);
        $this->assertSame(6.88, $response['bracket6ExhibitionTime']);
        $this->assertSame(37.57, $response['bracket6LapTime']);
        $this->assertSame(5.73, $response['bracket6TurnTime']);
        $this->assertSame(7.63, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes23(): void
    {
        $response = Accessory::times(stadiumId: 23, raceNumber: 1, date: '2024-01-02');
        $this->assertSame('定松勇樹', $response['bracket1RacerName']);
        $this->assertSame(6.72, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.27, $response['bracket1LapTime']);
        $this->assertSame(5.20, $response['bracket1TurnTime']);
        $this->assertSame(7.80, $response['bracket1StraightTime']);
        $this->assertSame('山口高志', $response['bracket2RacerName']);
        $this->assertSame(6.73, $response['bracket2ExhibitionTime']);
        $this->assertSame(37.07, $response['bracket2LapTime']);
        $this->assertSame(5.57, $response['bracket2TurnTime']);
        $this->assertSame(7.77, $response['bracket2StraightTime']);
        $this->assertSame('久富政弘', $response['bracket3RacerName']);
        $this->assertSame(6.73, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.43, $response['bracket3LapTime']);
        $this->assertSame(5.23, $response['bracket3TurnTime']);
        $this->assertSame(7.77, $response['bracket3StraightTime']);
        $this->assertSame('冨成謙児', $response['bracket4RacerName']);
        $this->assertSame(6.75, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.43, $response['bracket4LapTime']);
        $this->assertSame(5.80, $response['bracket4TurnTime']);
        $this->assertSame(7.80, $response['bracket4StraightTime']);
        $this->assertSame('吉田光', $response['bracket5RacerName']);
        $this->assertSame(6.75, $response['bracket5ExhibitionTime']);
        $this->assertSame(37.57, $response['bracket5LapTime']);
        $this->assertSame(5.77, $response['bracket5TurnTime']);
        $this->assertSame(7.83, $response['bracket5StraightTime']);
        $this->assertSame('熊本英一', $response['bracket6RacerName']);
        $this->assertSame(6.69, $response['bracket6ExhibitionTime']);
        $this->assertSame(38.60, $response['bracket6LapTime']);
        $this->assertSame(6.23, $response['bracket6TurnTime']);
        $this->assertSame(8.03, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testTimes24(): void
    {
        $response = Accessory::times(stadiumId: 24, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket1RacerName']);
        $this->assertSame(6.89, $response['bracket1ExhibitionTime']);
        $this->assertSame(36.93, $response['bracket1LapTime']);
        $this->assertSame(6.12, $response['bracket1TurnTime']);
        $this->assertSame(7.33, $response['bracket1StraightTime']);
        $this->assertSame('山口真喜子', $response['bracket2RacerName']);
        $this->assertSame(6.83, $response['bracket2ExhibitionTime']);
        $this->assertSame(36.73, $response['bracket2LapTime']);
        $this->assertSame(6.10, $response['bracket2TurnTime']);
        $this->assertSame(7.23, $response['bracket2StraightTime']);
        $this->assertSame('中島浩哉', $response['bracket3RacerName']);
        $this->assertSame(6.87, $response['bracket3ExhibitionTime']);
        $this->assertSame(36.83, $response['bracket3LapTime']);
        $this->assertSame(6.00, $response['bracket3TurnTime']);
        $this->assertSame(7.33, $response['bracket3StraightTime']);
        $this->assertSame('江頭賢太', $response['bracket4RacerName']);
        $this->assertSame(6.83, $response['bracket4ExhibitionTime']);
        $this->assertSame(37.61, $response['bracket4LapTime']);
        $this->assertSame(6.29, $response['bracket4TurnTime']);
        $this->assertSame(7.23, $response['bracket4StraightTime']);
        $this->assertSame('田中孝明', $response['bracket5RacerName']);
        $this->assertSame(6.86, $response['bracket5ExhibitionTime']);
        $this->assertSame(36.87, $response['bracket5LapTime']);
        $this->assertSame(6.07, $response['bracket5TurnTime']);
        $this->assertSame(7.33, $response['bracket5StraightTime']);
        $this->assertSame('津留浩一郎', $response['bracket6RacerName']);
        $this->assertSame(6.77, $response['bracket6ExhibitionTime']);
        $this->assertSame(36.80, $response['bracket6LapTime']);
        $this->assertSame(6.50, $response['bracket6TurnTime']);
        $this->assertSame(7.37, $response['bracket6StraightTime']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = Accessory::comments(stadiumId: 1, raceNumber: 1, date: '2024-01-02');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = Accessory::comments(stadiumId: 2, raceNumber: 1, date: '2024-01-05');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments03(): void
    {
        $response = Accessory::comments(stadiumId: 3, raceNumber: 1, date: '2024-01-07');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments05(): void
    {
        $response = Accessory::comments(stadiumId: 5, raceNumber: 1, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments06(): void
    {
        $response = Accessory::comments(stadiumId: 6, raceNumber: 1, date: '2024-12-07');
        $this->assertSame('倉田郁美', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('回り過ぎで軽い感じ。ターンが怖いし、滑る感じがした。', $response['bracket1RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket1RacerComment2Label']);
        $this->assertSame('起こしてすぐの足が重い感じ。走り出せば悪くない。', $response['bracket1RacerComment2']);
        $this->assertSame('中岡健人', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ペラはたたいた。乗りやすくて悪くなかったし、微調整で。', $response['bracket2RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket2RacerComment2Label']);
        $this->assertSame('スリット手前で伸びが止まる感じ。', $response['bracket2RacerComment2']);
        $this->assertSame('渡辺史之', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('試運転を終えてペラを慌ててたたいたので、参考外。', $response['bracket3RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket3RacerComment2Label']);
        $this->assertSame('スロー勢の中では行き足、伸びともまずまず。', $response['bracket3RacerComment2']);
        $this->assertSame('秋末秦悟', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('すっと起きたし、行き足とか出足が良さそうだった。', $response['bracket4RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket4RacerComment2Label']);
        $this->assertSame('特訓1本目は4カド、2本目はダッシュ6コース。行き足、伸びとも目立たず。', $response['bracket4RacerComment2']);
        $this->assertSame('大崎翔', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('スリットくらいしか分からないけど、班の比較は普通。', $response['bracket5RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket5RacerComment2Label']);
        $this->assertSame('スリット付近の伸びは微妙な感じ。', $response['bracket5RacerComment2']);
        $this->assertSame('片岡大地', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('複勝率(26・0%)ほど気になる感じはなかった。', $response['bracket6RacerComment1']);
        $this->assertSame('試運転記者の目', $response['bracket6RacerComment2Label']);
        $this->assertSame('吉永泰弘にはターン後にじわりと出られた。', $response['bracket6RacerComment2']);
    }

    /**
     * @return void
     */
    public function testComments07(): void
    {
        $response = Accessory::comments(stadiumId: 7, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('吉田裕平', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('足は60点だけど、中の上くらい。', $response['bracket1RacerComment1']);
        $this->assertSame('樅山拓馬', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('引き波を越える感じが良くないし、特訓から伸びは劣勢。', $response['bracket2RacerComment1']);
        $this->assertSame('服部達哉', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('後半はバランスが悪かったし、前半の方が良かった。', $response['bracket3RacerComment1']);
        $this->assertSame('宇野博之', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('気圧が低くてメチャ重かった。', $response['bracket4RacerComment1']);
        $this->assertSame('沼田大都', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('特訓や展示の行き足は良かったけど少し回したらスタートが…。', $response['bracket5RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket5RacerComment2Label']);
        $this->assertSame('回っていて乗りやすくなった。もう少し直線を求めたい。', $response['bracket5RacerComment2']);
        $this->assertSame('仲道大輔', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('エンジンは悪くないけど、49%の感じはない。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments09(): void
    {
        $response = Accessory::comments(stadiumId: 9, raceNumber: 1, date: '2024-01-01');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments10(): void
    {
        $response = Accessory::comments(stadiumId: 10, raceNumber: 1, date: '2024-01-18');
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
    public function testComments11(): void
    {
        $response = Accessory::comments(stadiumId: 11, raceNumber: 1, date: '2024-01-03');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments13(): void
    {
        $response = Accessory::comments(stadiumId: 13, raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('回転が合ってなくて重かったです', $response['bracket1RacerComment1']);
        $this->assertSame('鋤柄貴俊', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('走り出せば普通はあるかな', $response['bracket2RacerComment1']);
        $this->assertSame('一瀬明', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('出足はダメだけど直線は普通', $response['bracket3RacerComment1']);
        $this->assertSame('勝野竜司', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('足は悪くない感じの普通です', $response['bracket4RacerComment1']);
        $this->assertSame('松浦博人', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('起こしや乗り味は悪くないです', $response['bracket5RacerComment1']);
        $this->assertSame('高倉孝太', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('スタンダードな感じでしたね', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments14(): void
    {
        $response = Accessory::comments(stadiumId: 14, raceNumber: 1, date: '2024-01-01');
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
    public function testComments16(): void
    {
        $response = Accessory::comments(stadiumId: 16, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('浮田圭浩', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('4日目は展開があって3着になれた。', $response['bracket1RacerComment1']);
        $this->assertSame('阪本勇介', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('*8Rは1号艇でスローの4コースとなり3着', $response['bracket2RacerComment1']);
        $this->assertSame('福田理', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('安定板が付いた後半は悪くなかった。乗り心地を求めて調整する。', $response['bracket3RacerComment1']);
        $this->assertSame('峰重力也', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('変わらず足は普通。自分次第。', $response['bracket4RacerComment1']);
        $this->assertSame('立間充宏', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('ダメ。(2Rは3コースから4着、12Rは2コースから粘って3着)', $response['bracket5RacerComment1']);
        $this->assertSame('山下昂大', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('今節は合わせ切れていない。エンジンは悪くないと思う。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments17(): void
    {
        $response = Accessory::comments(stadiumId: 17, raceNumber: 1, date: '2024-01-01');
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
    public function testComments18(): void
    {
        $response = Accessory::comments(stadiumId: 18, raceNumber: 1, date: '2025-01-01');
        $this->assertSame('末永祐輝', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('状態は良かったと思います。', $response['bracket1RacerComment1']);
        $this->assertSame('金子順一', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('足は変わっていない。', $response['bracket2RacerComment1']);
        $this->assertSame('石倉拓美', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('中堅くらいです。', $response['bracket3RacerComment1']);
        $this->assertSame('花本剛', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('風が強くてもグリップが良かった。', $response['bracket4RacerComment1']);
        $this->assertSame('加木郁', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('悪くないけど、いい感じはしない。', $response['bracket5RacerComment1']);
        $this->assertSame('藤本佳史', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('足は普通くらい。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments19(): void
    {
        $response = Accessory::comments(stadiumId: 19, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('寺田空詩', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('乗りやすいし、足もいい。出てる', $response['bracket1RacerComment1']);
        $this->assertSame('新良一規', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('レースしやすい。乗り心地もいい', $response['bracket2RacerComment1']);
        $this->assertSame('佐藤駿介', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('ゾーン狭いが合えば回り足はいい', $response['bracket3RacerComment1']);
        $this->assertSame('岡部貴司', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('調整はほぼしてないが足は上の方', $response['bracket4RacerComment1']);
        $this->assertSame('田中浩之', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('道中で競ってもやられることない', $response['bracket5RacerComment1']);
        $this->assertSame('大田直弥', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('新ペラに換わってから全部がダメ', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments21(): void
    {
        $response = Accessory::comments(stadiumId: 21, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('新開航', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('変わらずいい。枠番で調整をする', $response['bracket1RacerComment1']);
        $this->assertSame('松尾宣邦', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('直線は甘いが出足は上向いている', $response['bracket2RacerComment1']);
        $this->assertSame('中渡修作', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('※バランスがよく中堅上位に到達', $response['bracket3RacerComment1']);
        $this->assertSame('羽野諒', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('ペラとバルブ調整で体感が上向き', $response['bracket4RacerComment1']);
        $this->assertSame('坂井滉哉', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('下がる感じはないが出足が良くない', $response['bracket5RacerComment1']);
        $this->assertSame('前田健太郎', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('伸びが来ない。ターン重視でいく', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments22(): void
    {
        $response = Accessory::comments(stadiumId: 22, raceNumber: 1, date: '2024-01-03');
        $this->assertSame('益田啓司', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('回り過ぎの分、乗りづらさを感じた。', $response['bracket1RacerComment1']);
        $this->assertSame('篠原飛翔', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('まだ合っていないけど、そこまで悪くない。', $response['bracket2RacerComment1']);
        $this->assertSame('藤森陸斗', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('伸びは明らかにいいが、乗りづらさがある。', $response['bracket3RacerComment1']);
        $this->assertSame('森晋太郎', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('(篠崎)仁志さんには少し出られる感じ。', $response['bracket4RacerComment1']);
        $this->assertSame('梶原正', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('何となくだけど伸び寄りの感じだった。', $response['bracket5RacerComment1']);
        $this->assertSame('桂林寛', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('ペラは叩いた。行き足に力強さがある。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments23(): void
    {
        $response = Accessory::comments(stadiumId: 23, raceNumber: 1, date: '2024-01-02');
        $this->assertSame('定松勇樹', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('普通ですかね。ちょっと回転を持て余している感じがあった。そこだけ。', $response['bracket1RacerComment1']);
        $this->assertSame('山口高志', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('ペラを叩いて乗ってみました。ターン回りが空回りしている感じがしました。', $response['bracket2RacerComment1']);
        $this->assertSame('久富政弘', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('最初の立ち上がりから良くない。ペラは叩いて行きました。', $response['bracket3RacerComment1']);
        $this->assertSame('冨成謙児', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('普通だと思う。出足型ですね。チルトは0度で行ったけどマイナスにします。', $response['bracket4RacerComment1']);
        $this->assertSame('吉田光', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('ターン回り、乗り心地は何か合ってないような感じがした。', $response['bracket5RacerComment1']);
        $this->assertSame('熊本英一', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('悪くないと思います。そのまま行ってみようかと思っている。', $response['bracket6RacerComment1']);
    }

    /**
     * @return void
     */
    public function testComments24(): void
    {
        $response = Accessory::comments(stadiumId: 24, raceNumber: 1, date: '2024-01-01');
        $this->assertSame('川上昇平', $response['bracket1RacerName']);
        $this->assertSame('前日コメント', $response['bracket1RacerComment1Label']);
        $this->assertSame('体感では行き足と乗り心地が悪い感じがした。ペラと本体整備も考える', $response['bracket1RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket1RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「行き足から伸びは少し気になるけど、前検よりは上向いている。回転の上がりはもう少しな感じ。出足は少し重いかも。競ってみてどうかですね。乗りにくさはなさそうですよ。」[19:32]', $response['bracket1RacerComment2']);
        $this->assertSame('山口真喜子', $response['bracket2RacerName']);
        $this->assertSame('前日コメント', $response['bracket2RacerComment1Label']);
        $this->assertSame('回転が上がっていなかったし、振り込みそうにもなった。ペラを叩いた特訓の体感もよくない。', $response['bracket2RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket2RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「試運転では出足がなくて置いて行かれていたし、本番でもペラが合っていなくてターンをしてから舟が進んでいなかったですね。伸びは下がることはない。出足を求めて調整する。」[19:57]', $response['bracket2RacerComment2']);
        $this->assertSame('中島浩哉', $response['bracket3RacerName']);
        $this->assertSame('前日コメント', $response['bracket3RacerComment1Label']);
        $this->assertSame('そのまま行ったけど、ペラが特殊すぎて乗れなかった。伸びるわけでもない。前検は参考外です。', $response['bracket3RacerComment1']);
        $this->assertSame('江頭賢太', $response['bracket4RacerName']);
        $this->assertSame('前日コメント', $response['bracket4RacerComment1Label']);
        $this->assertSame('握った時の反応が良かったり、悪かったりした。足うんぬんより、とにかく気持ちで走ります。', $response['bracket4RacerComment1']);
        $this->assertSame('田中孝明', $response['bracket5RacerName']);
        $this->assertSame('前日コメント', $response['bracket5RacerComment1Label']);
        $this->assertSame('出足や起こしは悪いけど伸びが良かった。僕向きではないけど、このまま1回乗ってみてもいいかも。', $response['bracket5RacerComment1']);
        $this->assertSame('津留浩一郎', $response['bracket6RacerName']);
        $this->assertSame('前日コメント', $response['bracket6RacerComment1Label']);
        $this->assertSame('まだ調整途中だけど、手応えとしては悪くないですよ。ちょっと伸び型。', $response['bracket6RacerComment1']);
        $this->assertSame('当日コメント', $response['bracket6RacerComment2Label']);
        $this->assertSame('(当日気配)レース後「前半はぼちぼちいい感触だった。やや伸び型で、出足は少し重さがありましたね。後半へは微調整くらい。」[19:08]', $response['bracket6RacerComment2']);
    }
}
