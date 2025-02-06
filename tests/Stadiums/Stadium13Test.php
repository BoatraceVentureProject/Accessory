<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium13;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium13Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium13
     */
    protected Stadium13 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium13(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket_1_racer_name']);
        $this->assertSame(7.08, $response['bracket_1_exhibition_time']);
        $this->assertSame(38.01, $response['bracket_1_lap_time']);
        $this->assertSame(11.67, $response['bracket_1_turn_time']);
        $this->assertSame('鋤柄貴俊', $response['bracket_2_racer_name']);
        $this->assertSame(7.13, $response['bracket_2_exhibition_time']);
        $this->assertSame(38.10, $response['bracket_2_lap_time']);
        $this->assertSame(11.89, $response['bracket_2_turn_time']);
        $this->assertSame('一瀬明', $response['bracket_3_racer_name']);
        $this->assertSame(7.08, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.64, $response['bracket_3_lap_time']);
        $this->assertSame(11.72, $response['bracket_3_turn_time']);
        $this->assertSame('勝野竜司', $response['bracket_4_racer_name']);
        $this->assertSame(7.05, $response['bracket_4_exhibition_time']);
        $this->assertSame(38.49, $response['bracket_4_lap_time']);
        $this->assertSame(11.90, $response['bracket_4_turn_time']);
        $this->assertSame('松浦博人', $response['bracket_5_racer_name']);
        $this->assertSame(7.07, $response['bracket_5_exhibition_time']);
        $this->assertSame(38.25, $response['bracket_5_lap_time']);
        $this->assertSame(11.63, $response['bracket_5_turn_time']);
        $this->assertSame('高倉孝太', $response['bracket_6_racer_name']);
        $this->assertSame(7.02, $response['bracket_6_exhibition_time']);
        $this->assertSame(38.02, $response['bracket_6_lap_time']);
        $this->assertSame(11.74, $response['bracket_6_turn_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 10, date: '2024-04-23');
        $this->assertSame('津久井拓也', $response['bracket_1_racer_name']);
        $this->assertSame(7.04, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.59, $response['bracket_1_lap_time']);
        $this->assertSame(11.75, $response['bracket_1_turn_time']);
        $this->assertSame('山地正樹', $response['bracket_2_racer_name']);
        $this->assertSame(7.04, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.53, $response['bracket_2_lap_time']);
        $this->assertSame(11.72, $response['bracket_2_turn_time']);
        $this->assertSame('高倉孝太', $response['bracket_3_racer_name']);
        $this->assertSame(7.10, $response['bracket_3_exhibition_time']);
        $this->assertSame(38.15, $response['bracket_3_lap_time']);
        $this->assertSame(11.94, $response['bracket_3_turn_time']);
        $this->assertSame('松山裕基', $response['bracket_4_racer_name']);
        $this->assertSame(7.03, $response['bracket_4_exhibition_time']);
        $this->assertSame(38.49, $response['bracket_4_lap_time']);
        $this->assertSame(11.99, $response['bracket_4_turn_time']);
        $this->assertSame('登玉隼百', $response['bracket_5_racer_name']);
        $this->assertSame(7.06, $response['bracket_5_exhibition_time']);
        $this->assertSame(38.47, $response['bracket_5_lap_time']);
        $this->assertSame(12.03, $response['bracket_5_turn_time']);
        $this->assertSame('野長瀬正孝', $response['bracket_6_racer_name']);
        $this->assertSame(7.04, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.52, $response['bracket_6_lap_time']);
        $this->assertSame(11.89, $response['bracket_6_turn_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-04-23');
        $this->assertSame('高山弘斗', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('回転が合ってなくて重かったです', $response['bracket_1_racer_comment_1']);
        $this->assertSame('鋤柄貴俊', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('走り出せば普通はあるかな', $response['bracket_2_racer_comment_1']);
        $this->assertSame('一瀬明', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('出足はダメだけど直線は普通', $response['bracket_3_racer_comment_1']);
        $this->assertSame('勝野竜司', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('足は悪くない感じの普通です', $response['bracket_4_racer_comment_1']);
        $this->assertSame('松浦博人', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('起こしや乗り味は悪くないです', $response['bracket_5_racer_comment_1']);
        $this->assertSame('高倉孝太', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('スタンダードな感じでしたね', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 10, date: '2024-04-23');
        $this->assertSame('津久井拓也', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('ペラを叩いたけど起こしが△', $response['bracket_1_racer_comment_1']);
        $this->assertSame('山地正樹', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('(前検は目立つ舟足はなかった)', $response['bracket_2_racer_comment_1']);
        $this->assertSame('高倉孝太', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('スタンダードな感じでしたね', $response['bracket_3_racer_comment_1']);
        $this->assertSame('松山裕基', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('体感が悪い感じがしました', $response['bracket_4_racer_comment_1']);
        $this->assertSame('登玉隼百', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('班の中でも少し余裕がありました', $response['bracket_5_racer_comment_1']);
        $this->assertSame('野長瀬正孝', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラを叩いて行って感じは○', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber1AndDate20240423(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 1, date: '2024-04-23');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('123/456', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['3-4=2', '3-4=5', '3-2=5', '4-3-2', '4-3-5'], $response['reporter_yesterday_focus']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('3枠シード一瀬のチャンスカード。自力Sシャープにさばくだろう。勝野は快ダッシュ俊敏戦。鋤柄は先まくり目標にS集中。松浦、高倉が展開切り込み。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日コース', $response['jlc_yesterday_course_label']);
        $this->assertSame('123456', $response['jlc_yesterday_course']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['3-2-4', '3-4-2', '3-2-5', '3-4-5', '3-5-2'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('70%', $response['jlc_yesterday_reliability']);
        $this->assertSame('記者予想 当日コース', $response['reporter_today_course_label']);
        $this->assertSame('123/456', $response['reporter_today_course']);
        $this->assertSame('記者予想 当日コメント', $response['reporter_today_comment_label']);
        $this->assertSame('特訓の一瀬は威張れるほどはないがS安定。行き足に悪い感じはなく周回展示もまずまずなら軸不動。高山弘はイン持つ感触だがS展示のようにSバラバラと不安。ならば鋤柄の先制S、回り足が来ていた松浦をマーク。勝野、高倉も僅差。', $response['reporter_today_comment']);
    }

    /**
     * @return void
     */
    public function testForecastsForRaceNumber10AndDate20240423(): void
    {
        $response = $this->stadium->forecasts(raceNumber: 10, date: '2024-04-23');
        $this->assertSame('記者予想 前日コース', $response['reporter_yesterday_course_label']);
        $this->assertSame('1236/45', $response['reporter_yesterday_course']);
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['1-4=2', '1-4=6', '1-2=6', '4-1-2', '4-1-6'], $response['reporter_yesterday_focus']);
        $this->assertSame('記者予想 前日コメント', $response['reporter_yesterday_comment_label']);
        $this->assertSame('津久井は伸び型の雰囲気だがインSを決め先マイ態勢を形成。松山の気配が良くカド一発は要注意。山地は鋭く差し追撃。野長瀬、登玉も接戦できる。', $response['reporter_yesterday_comment']);
        $this->assertSame('JLC予想 前日コース', $response['jlc_yesterday_course_label']);
        $this->assertSame('126345', $response['jlc_yesterday_course']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['1-6-2', '1-6-3', '6-1-2', '6-1-3', '1-2-6'], $response['jlc_yesterday_focus']);
        $this->assertSame('JLC予想 前日信頼度', $response['jlc_yesterday_reliability_label']);
        $this->assertSame('85%', $response['jlc_yesterday_reliability']);
        $this->assertSame('記者予想 当日コース', $response['reporter_today_course_label']);
        $this->assertSame('12346/5', $response['reporter_today_course']);
        $this->assertSame('記者予想 当日コメント', $response['reporter_today_comment_label']);
        $this->assertSame('特訓から津久井は深インだがSバッチリ。行き足も良く先手を取れる好脚。山地もついて行く。2コースは仕事のできる位置でもあり差し注意。穴は登玉とダッシュへ引いた時の松山。野長瀬も回り足が力強く2、3着巧走。高倉も水準はある', $response['reporter_today_comment']);
    }
}
