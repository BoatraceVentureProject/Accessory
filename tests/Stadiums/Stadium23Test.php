<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium23;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium23Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium23
     */
    protected Stadium23 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium23(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-01-02');
        $this->assertSame('定松勇樹', $response['bracket_1_racer_name']);
        $this->assertSame(6.72, $response['bracket_1_exhibition_time']);
        $this->assertSame(36.27, $response['bracket_1_lap_time']);
        $this->assertSame(5.20, $response['bracket_1_turn_time']);
        $this->assertSame(7.80, $response['bracket_1_straight_time']);
        $this->assertSame('山口高志', $response['bracket_2_racer_name']);
        $this->assertSame(6.73, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.07, $response['bracket_2_lap_time']);
        $this->assertSame(5.57, $response['bracket_2_turn_time']);
        $this->assertSame(7.77, $response['bracket_2_straight_time']);
        $this->assertSame('久富政弘', $response['bracket_3_racer_name']);
        $this->assertSame(6.73, $response['bracket_3_exhibition_time']);
        $this->assertSame(36.43, $response['bracket_3_lap_time']);
        $this->assertSame(5.23, $response['bracket_3_turn_time']);
        $this->assertSame(7.77, $response['bracket_3_straight_time']);
        $this->assertSame('冨成謙児', $response['bracket_4_racer_name']);
        $this->assertSame(6.75, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.43, $response['bracket_4_lap_time']);
        $this->assertSame(5.80, $response['bracket_4_turn_time']);
        $this->assertSame(7.80, $response['bracket_4_straight_time']);
        $this->assertSame('吉田光', $response['bracket_5_racer_name']);
        $this->assertSame(6.75, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.57, $response['bracket_5_lap_time']);
        $this->assertSame(5.77, $response['bracket_5_turn_time']);
        $this->assertSame(7.83, $response['bracket_5_straight_time']);
        $this->assertSame('熊本英一', $response['bracket_6_racer_name']);
        $this->assertSame(6.69, $response['bracket_6_exhibition_time']);
        $this->assertSame(38.60, $response['bracket_6_lap_time']);
        $this->assertSame(6.23, $response['bracket_6_turn_time']);
        $this->assertSame(8.03, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 6, date: '2024-01-02');
        $this->assertSame('小野勇作', $response['bracket_1_racer_name']);
        $this->assertSame(6.63, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.04, $response['bracket_1_lap_time']);
        $this->assertSame(5.43, $response['bracket_1_turn_time']);
        $this->assertSame(8.02, $response['bracket_1_straight_time']);
        $this->assertSame('熊本英一', $response['bracket_2_racer_name']);
        $this->assertSame(6.63, $response['bracket_2_exhibition_time']);
        $this->assertSame(38.46, $response['bracket_2_lap_time']);
        $this->assertSame(5.99, $response['bracket_2_turn_time']);
        $this->assertSame(8.35, $response['bracket_2_straight_time']);
        $this->assertSame('武富智亮', $response['bracket_3_racer_name']);
        $this->assertSame(6.67, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.71, $response['bracket_3_lap_time']);
        $this->assertSame(5.67, $response['bracket_3_turn_time']);
        $this->assertSame(7.73, $response['bracket_3_straight_time']);
        $this->assertSame('渡邊伸太郎', $response['bracket_4_racer_name']);
        $this->assertSame(6.68, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.39, $response['bracket_4_lap_time']);
        $this->assertSame(5.84, $response['bracket_4_turn_time']);
        $this->assertSame(7.75, $response['bracket_4_straight_time']);
        $this->assertSame('浦田晃嗣', $response['bracket_5_racer_name']);
        $this->assertSame(6.74, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.04, $response['bracket_5_lap_time']);
        $this->assertSame(5.57, $response['bracket_5_turn_time']);
        $this->assertSame(7.82, $response['bracket_5_straight_time']);
        $this->assertSame('松江秀徳', $response['bracket_6_racer_name']);
        $this->assertSame(6.66, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.72, $response['bracket_6_lap_time']);
        $this->assertSame(5.75, $response['bracket_6_turn_time']);
        $this->assertSame(7.85, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-01-02');
        $this->assertSame('定松勇樹', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('普通ですかね。ちょっと回転を持て余している感じがあった。そこだけ。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('山口高志', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ペラを叩いて乗ってみました。ターン回りが空回りしている感じがしました。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('久富政弘', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('最初の立ち上がりから良くない。ペラは叩いて行きました。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('冨成謙児', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('普通だと思う。出足型ですね。チルトは0度で行ったけどマイナスにします。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('吉田光', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('ターン回り、乗り心地は何か合ってないような感じがした。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('熊本英一', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('悪くないと思います。そのまま行ってみようかと思っている。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 6, date: '2024-01-02');
        $this->assertSame('小野勇作', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('乗り心地は悪くないと思う。直線はいいようには思えなかった。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('熊本英一', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('悪くないと思います。そのまま行ってみようかと思っている。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('武富智亮', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('前検は合ってないかなって感じで。しっかり合わせたいですね。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('渡邊伸太郎', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('そのまま行ってみたけど変わらない。ちょっと回転が上がっていなかった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('浦田晃嗣', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('良くないと思います。ケツを振る症状がありました。何か考えます。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('松江秀徳', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('ペラは叩き変えて行きました。エンジンの力強さは特に感じない。', $response['bracket_6_racer_comment_1']);
    }

    /**
     * @return void
     */
    public function testComments03(): void
    {
        $response = $this->stadium->comments(raceNumber: 9, date: '2024-01-02');
        $this->assertSame('上瀧和則', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('いいエンジンですね。ペラに手を入れます。整備はしません。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('山崎鉄平', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('前検の感じが良くなかったかなと思います。もう一工夫欲しいかなって感じ。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_2_racer_comment_2_label']);
        $this->assertSame('回っていた。ゾーンに入ってたけど展示タイムが出なかった。道中は良いけど違和感がある。(10:08現在)', $response['bracket_2_racer_comment_2']);
        $this->assertSame('眞鳥章太', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('微妙。直線で下がっていく感じがありました。ターン回りは悪くないと思う。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('北川太一', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('悪くなさそう。上がりが良くて、あとは乗り心地を改善すればいいと思う。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_4_racer_comment_2_label']);
        $this->assertSame('モーターの評価が良くないので整備をした。前検は普通だったから普通ちょいになればいいな。(10:08現在)', $response['bracket_4_racer_comment_2']);
        $this->assertSame('安河内健', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('ちょっとケツを振っていましたが全然違和感はなかったです。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('深山祐二', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('良くないですね。特に直線とか握り込みが良くないですね。', $response['bracket_6_racer_comment_1']);
        $this->assertSame('当日コメント', $response['bracket_6_racer_comment_2_label']);
        $this->assertSame('ちょっと合っていなかった。伸びが弱い。特訓から下がっていて、赤坂選手に先行されていた。(10:39現在)', $response['bracket_6_racer_comment_2']);
    }
}
