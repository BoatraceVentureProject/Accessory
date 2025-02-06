<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium03;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium03Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium03
     */
    protected Stadium03 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium03(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-07');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 8, date: '2024-01-07');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-07');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 8, date: '2024-01-07');
        $this->assertSame([], $response);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber1AndDate20240107(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 1, date: '2024-01-07');
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['1=2', '1=4'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['1=2-4', '1=2-3', '1=4-2', '1=4-3'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('★1M先制で渡邉逃走★直線優位な気配ある渡邉が逃げ狙う一戦。しかし伏田も機の底力5日目に見せている。気配やや↑の大塚。村田も握って。', $response['reporter_yesterday_comment']);
        $this->assertSame('記者予想 前日信頼度', $response['reporter_yesterday_reliability_label']);
        $this->assertSame('50%', $response['reporter_yesterday_reliability']);
        $this->assertSame('記者予想 当日フォーカス', $response['reporter_today_focus_label']);
        $this->assertSame(['1=2-35', '1=3-25'], $response['reporter_today_focus']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber8AndDate20240107(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 8, date: '2024-01-07');
        $this->assertSame('記者予想 前日フォーカス 2連単', $response['reporter_yesterday_focus_exacta_label']);
        $this->assertSame(['3=1', '3=4'], $response['reporter_yesterday_focus_exacta']);
        $this->assertSame('記者予想 前日フォーカス 3連単', $response['reporter_yesterday_focus_trifecta_label']);
        $this->assertSame(['3=1-4', '3=1-6', '3=4-1', '3=4-6'], $response['reporter_yesterday_focus_trifecta']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('★ズバッと捌く岡部★S行ける回り足良い岡部から。自在マイで先頭へ。成績程気配悪くない多田もイン粘り。ダッシュから直線良い渡邉・伏田の猛攻。', $response['reporter_yesterday_comment']);
        $this->assertSame('記者予想 前日信頼度', $response['reporter_yesterday_reliability_label']);
        $this->assertSame('40%', $response['reporter_yesterday_reliability']);
    }
}
