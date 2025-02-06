<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium10;
use PHPUnit\Framework\TestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium10Test extends TestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium10
     */
    protected Stadium10 $stadium;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->stadium = new Stadium10(
            new HttpBrowser()
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceCode: 1, date: '2024-01-18');
        $this->assertSame('大上卓人', $response['boat_number_1_racer_name']);
        $this->assertSame(6.55, $response['boat_number_1_racer_exhibition_time']);
        $this->assertSame(36.30, $response['boat_number_1_racer_lap_time']);
        $this->assertSame(5.07, $response['boat_number_1_racer_turn_time']);
        $this->assertSame(6.53, $response['boat_number_1_racer_straight_time']);
        $this->assertSame('齋藤達希', $response['boat_number_2_racer_name']);
        $this->assertSame(6.65, $response['boat_number_2_racer_exhibition_time']);
        $this->assertSame(37.20, $response['boat_number_2_racer_lap_time']);
        $this->assertSame(5.40, $response['boat_number_2_racer_turn_time']);
        $this->assertSame(6.72, $response['boat_number_2_racer_straight_time']);
        $this->assertSame('本吉正樹', $response['boat_number_3_racer_name']);
        $this->assertSame(6.63, $response['boat_number_3_racer_exhibition_time']);
        $this->assertSame(36.87, $response['boat_number_3_racer_lap_time']);
        $this->assertSame(5.43, $response['boat_number_3_racer_turn_time']);
        $this->assertSame(6.63, $response['boat_number_3_racer_straight_time']);
        $this->assertSame('竹田吉行', $response['boat_number_4_racer_name']);
        $this->assertSame(6.65, $response['boat_number_4_racer_exhibition_time']);
        $this->assertSame(37.25, $response['boat_number_4_racer_lap_time']);
        $this->assertSame(5.53, $response['boat_number_4_racer_turn_time']);
        $this->assertSame(6.67, $response['boat_number_4_racer_straight_time']);
        $this->assertSame('松下誉士', $response['boat_number_5_racer_name']);
        $this->assertSame(6.59, $response['boat_number_5_racer_exhibition_time']);
        $this->assertSame(37.63, $response['boat_number_5_racer_lap_time']);
        $this->assertSame(5.38, $response['boat_number_5_racer_turn_time']);
        $this->assertSame(6.62, $response['boat_number_5_racer_straight_time']);
        $this->assertSame('籾山佳岳', $response['boat_number_6_racer_name']);
        $this->assertSame(6.73, $response['boat_number_6_racer_exhibition_time']);
        $this->assertSame(37.07, $response['boat_number_6_racer_lap_time']);
        $this->assertSame(5.50, $response['boat_number_6_racer_turn_time']);
        $this->assertSame(6.70, $response['boat_number_6_racer_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceCode: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['boat_number_1_racer_name']);
        $this->assertSame(6.67, $response['boat_number_1_racer_exhibition_time']);
        $this->assertSame(36.83, $response['boat_number_1_racer_lap_time']);
        $this->assertSame(5.17, $response['boat_number_1_racer_turn_time']);
        $this->assertSame(6.63, $response['boat_number_1_racer_straight_time']);
        $this->assertSame('松本庸平', $response['boat_number_2_racer_name']);
        $this->assertSame(6.55, $response['boat_number_2_racer_exhibition_time']);
        $this->assertSame(38.25, $response['boat_number_2_racer_lap_time']);
        $this->assertSame(5.65, $response['boat_number_2_racer_turn_time']);
        $this->assertSame(6.77, $response['boat_number_2_racer_straight_time']);
        $this->assertSame('古田祐貴', $response['boat_number_3_racer_name']);
        $this->assertSame(6.65, $response['boat_number_3_racer_exhibition_time']);
        $this->assertSame(37.27, $response['boat_number_3_racer_lap_time']);
        $this->assertSame(5.70, $response['boat_number_3_racer_turn_time']);
        $this->assertSame(6.70, $response['boat_number_3_racer_straight_time']);
        $this->assertSame('寺嶋雄', $response['boat_number_4_racer_name']);
        $this->assertSame(6.63, $response['boat_number_4_racer_exhibition_time']);
        $this->assertSame(37.95, $response['boat_number_4_racer_lap_time']);
        $this->assertSame(5.70, $response['boat_number_4_racer_turn_time']);
        $this->assertSame(6.70, $response['boat_number_4_racer_straight_time']);
        $this->assertSame('本吉正樹', $response['boat_number_5_racer_name']);
        $this->assertSame(6.67, $response['boat_number_5_racer_exhibition_time']);
        $this->assertSame(37.62, $response['boat_number_5_racer_lap_time']);
        $this->assertSame(5.62, $response['boat_number_5_racer_turn_time']);
        $this->assertSame(6.70, $response['boat_number_5_racer_straight_time']);
        $this->assertSame('徳増秀樹', $response['boat_number_6_racer_name']);
        $this->assertSame(6.63, $response['boat_number_6_racer_exhibition_time']);
        $this->assertSame(37.63, $response['boat_number_6_racer_lap_time']);
        $this->assertSame(5.50, $response['boat_number_6_racer_turn_time']);
        $this->assertSame(6.58, $response['boat_number_6_racer_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceCode: 1, date: '2024-01-18');
        $this->assertSame('大上卓人', $response['boat_number_1_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_1_racer_yesterday_comment_label']);
        $this->assertSame('足悪くなさそうでまずはこのまま', $response['boat_number_1_racer_yesterday_comment']);
        $this->assertSame('齋藤達希', $response['boat_number_2_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_2_racer_yesterday_comment_label']);
        $this->assertSame('ペラ叩いて一瞬の出足は良かった', $response['boat_number_2_racer_yesterday_comment']);
        $this->assertSame('本吉正樹', $response['boat_number_3_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_3_racer_yesterday_comment_label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['boat_number_3_racer_yesterday_comment']);
        $this->assertSame('竹田吉行', $response['boat_number_4_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_4_racer_yesterday_comment_label']);
        $this->assertSame('モーターは良さそうだしペラから', $response['boat_number_4_racer_yesterday_comment']);
        $this->assertSame('松下誉士', $response['boat_number_5_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_5_racer_yesterday_comment_label']);
        $this->assertSame('伸びる感じなくターン合ってない', $response['boat_number_5_racer_yesterday_comment']);
        $this->assertSame('籾山佳岳', $response['boat_number_6_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_6_racer_yesterday_comment_label']);
        $this->assertSame('班の中で一番悪い感じがした', $response['boat_number_6_racer_yesterday_comment']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceCode: 6, date: '2024-01-18');
        $this->assertSame('松山裕基', $response['boat_number_1_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_1_racer_yesterday_comment_label']);
        $this->assertSame('弱くはないけど普通くらいかな', $response['boat_number_1_racer_yesterday_comment']);
        $this->assertSame('松本庸平', $response['boat_number_2_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_2_racer_yesterday_comment_label']);
        $this->assertSame('悪い感じなかったが乗心地不安定', $response['boat_number_2_racer_yesterday_comment']);
        $this->assertSame('古田祐貴', $response['boat_number_3_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_3_racer_yesterday_comment_label']);
        $this->assertSame('このままでも戦えそうな感じした', $response['boat_number_3_racer_yesterday_comment']);
        $this->assertSame('寺嶋雄', $response['boat_number_4_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_4_racer_yesterday_comment_label']);
        $this->assertSame('回転を合わせれば良くなりそう', $response['boat_number_4_racer_yesterday_comment']);
        $this->assertSame('本吉正樹', $response['boat_number_5_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_5_racer_yesterday_comment_label']);
        $this->assertSame('そのまま乗って回る感じ悪くない', $response['boat_number_5_racer_yesterday_comment']);
        $this->assertSame('徳増秀樹', $response['boat_number_6_racer_name']);
        $this->assertSame('前日コメント', $response['boat_number_6_racer_yesterday_comment_label']);
        $this->assertSame('ペラが合ってない感じ。色々やる', $response['boat_number_6_racer_yesterday_comment']);
    }

    /**
     * @return void
     */
    public function testForecastsForraceCode1AndDate20240118(): void
    {
        $response = $this->stadium->forecasts(raceCode: 1, date: '2024-01-18');
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['1=2-4', '1=2-3', '1=4-2', '1=4-3', '1=3-2'], $response['reporter_yesterday_focus']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['1-4-5', '1-5-4', '1-4-2', '1-5-2', '1-2-4'], $response['jlc_yesterday_focus']);
        $this->assertSame('記者予想 当日コメント', $response['reporter_today_comment_label']);
        $this->assertSame('1R初戦からチャンスの①大上がこれをしっかりものにする。②齋藤は素早くハンドル切って追従。④竹田も冷静に展開見ながら回る。', $response['reporter_today_comment']);
        $this->assertSame('記者予想 当日フォーカス', $response['reporter_today_focus_label']);
        $this->assertSame(['1-2-流し', '1-4-流し'], $response['reporter_today_focus']);
    }

    /**
     * @return void
     */
    public function testForecastsForraceCode6AndDate20240118(): void
    {
        $response = $this->stadium->forecasts(raceCode: 6, date: '2024-01-18');
        $this->assertSame('記者予想 前日フォーカス', $response['reporter_yesterday_focus_label']);
        $this->assertSame(['6=3-1', '6=3-2', '6=1-3', '6=1-2', '6=2-3'], $response['reporter_yesterday_focus']);
        $this->assertSame('JLC予想 前日フォーカス', $response['jlc_yesterday_focus_label']);
        $this->assertSame(['6-3-1', '6-3-4', '3-6-1', '3-6-4', '6-1-3'], $response['jlc_yesterday_focus']);
        $this->assertSame('記者予想 当日コメント', $response['reporter_today_comment_label']);
        $this->assertSame('6R大外枠の⑥徳増だが、コース取りも視野に巧みに捌いて外枠克服。③古田は全速ターンで迫る。①松山もインをキープして連に絡む。', $response['reporter_today_comment']);
        $this->assertSame('記者予想 当日フォーカス', $response['reporter_today_focus_label']);
        $this->assertSame(['6=3-124', '6=1-234'], $response['reporter_today_focus']);
    }
}
