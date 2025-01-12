<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project\Tests\Stadiums;

use Boatrace\Venture\Project\Stadiums\Stadium06;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Symfony\Component\BrowserKit\HttpBrowser;

/**
 * @author shimomo
 */
class Stadium06Test extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Venture\Project\Stadiums\Stadium06
     */
    protected Stadium06 $stadium;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->stadium = new Stadium06(
            new HttpBrowser
        );
    }

    /**
     * @return void
     */
    public function testTimes01(): void
    {
        $response = $this->stadium->times(raceNumber: 1, date: '2024-11-01');
        $this->assertSame('星栄爾', $response['bracket_1_racer_name']);
        $this->assertSame(6.70, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.50, $response['bracket_1_lap_time']);
        $this->assertSame(5.60, $response['bracket_1_turn_time']);
        $this->assertSame(7.69, $response['bracket_1_straight_time']);
        $this->assertSame('吉武真也', $response['bracket_2_racer_name']);
        $this->assertSame(6.66, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.71, $response['bracket_2_lap_time']);
        $this->assertSame(5.90, $response['bracket_2_turn_time']);
        $this->assertSame(7.63, $response['bracket_2_straight_time']);
        $this->assertSame('小川時光', $response['bracket_3_racer_name']);
        $this->assertSame(6.67, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.48, $response['bracket_3_lap_time']);
        $this->assertSame(5.63, $response['bracket_3_turn_time']);
        $this->assertSame(7.73, $response['bracket_3_straight_time']);
        $this->assertSame('尾道佳諭', $response['bracket_4_racer_name']);
        $this->assertSame(6.63, $response['bracket_4_exhibition_time']);
        $this->assertSame(37.59, $response['bracket_4_lap_time']);
        $this->assertSame(5.57, $response['bracket_4_turn_time']);
        $this->assertSame(7.73, $response['bracket_4_straight_time']);
        $this->assertSame('土井祥伍', $response['bracket_5_racer_name']);
        $this->assertSame(6.67, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.30, $response['bracket_5_lap_time']);
        $this->assertSame(5.77, $response['bracket_5_turn_time']);
        $this->assertSame(7.70, $response['bracket_5_straight_time']);
        $this->assertSame('大島隆乃介', $response['bracket_6_racer_name']);
        $this->assertSame(6.69, $response['bracket_6_exhibition_time']);
        $this->assertSame(37.27, $response['bracket_6_lap_time']);
        $this->assertSame(5.53, $response['bracket_6_turn_time']);
        $this->assertSame(7.70, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testTimes02(): void
    {
        $response = $this->stadium->times(raceNumber: 2, date: '2024-11-01');
        $this->assertSame('川村正輝', $response['bracket_1_racer_name']);
        $this->assertSame(6.65, $response['bracket_1_exhibition_time']);
        $this->assertSame(37.08, $response['bracket_1_lap_time']);
        $this->assertSame(5.72, $response['bracket_1_turn_time']);
        $this->assertSame(7.72, $response['bracket_1_straight_time']);
        $this->assertSame('小林文彦', $response['bracket_2_racer_name']);
        $this->assertSame(6.68, $response['bracket_2_exhibition_time']);
        $this->assertSame(37.90, $response['bracket_2_lap_time']);
        $this->assertSame(5.65, $response['bracket_2_turn_time']);
        $this->assertSame(7.80, $response['bracket_2_straight_time']);
        $this->assertSame('伊久間陽優', $response['bracket_3_racer_name']);
        $this->assertSame(6.73, $response['bracket_3_exhibition_time']);
        $this->assertSame(37.42, $response['bracket_3_lap_time']);
        $this->assertSame(5.64, $response['bracket_3_turn_time']);
        $this->assertSame(7.75, $response['bracket_3_straight_time']);
        $this->assertSame('梶野学志', $response['bracket_4_racer_name']);
        $this->assertSame(6.73, $response['bracket_4_exhibition_time']);
        $this->assertSame(38.31, $response['bracket_4_lap_time']);
        $this->assertSame(5.53, $response['bracket_4_turn_time']);
        $this->assertSame(7.85, $response['bracket_4_straight_time']);
        $this->assertSame('村松将平', $response['bracket_5_racer_name']);
        $this->assertSame(6.72, $response['bracket_5_exhibition_time']);
        $this->assertSame(37.34, $response['bracket_5_lap_time']);
        $this->assertSame(5.55, $response['bracket_5_turn_time']);
        $this->assertSame(7.73, $response['bracket_5_straight_time']);
        $this->assertSame('石田章央', $response['bracket_6_racer_name']);
        $this->assertSame(6.75, $response['bracket_6_exhibition_time']);
        $this->assertSame(38.11, $response['bracket_6_lap_time']);
        $this->assertSame(5.86, $response['bracket_6_turn_time']);
        $this->assertSame(7.73, $response['bracket_6_straight_time']);
    }

    /**
     * @return void
     */
    public function testComments01(): void
    {
        $response = $this->stadium->comments(raceNumber: 1, date: '2024-12-07');
        $this->assertSame('倉田郁美', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('回り過ぎで軽い感じ。ターンが怖いし、滑る感じがした。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_1_racer_comment_2_label']);
        $this->assertSame('起こしてすぐの足が重い感じ。走り出せば悪くない。', $response['bracket_1_racer_comment_2']);
        $this->assertSame('中岡健人', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('ペラはたたいた。乗りやすくて悪くなかったし、微調整で。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_2_racer_comment_2_label']);
        $this->assertSame('スリット手前で伸びが止まる感じ。', $response['bracket_2_racer_comment_2']);
        $this->assertSame('渡辺史之', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('試運転を終えてペラを慌ててたたいたので、参考外。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_3_racer_comment_2_label']);
        $this->assertSame('スロー勢の中では行き足、伸びともまずまず。', $response['bracket_3_racer_comment_2']);
        $this->assertSame('秋末秦悟', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('すっと起きたし、行き足とか出足が良さそうだった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_4_racer_comment_2_label']);
        $this->assertSame('特訓1本目は4カド、2本目はダッシュ6コース。行き足、伸びとも目立たず。', $response['bracket_4_racer_comment_2']);
        $this->assertSame('大崎翔', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('スリットくらいしか分からないけど、班の比較は普通。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_5_racer_comment_2_label']);
        $this->assertSame('スリット付近の伸びは微妙な感じ。', $response['bracket_5_racer_comment_2']);
        $this->assertSame('片岡大地', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('複勝率(26・0%)ほど気になる感じはなかった。', $response['bracket_6_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_6_racer_comment_2_label']);
        $this->assertSame('吉永泰弘にはターン後にじわりと出られた。', $response['bracket_6_racer_comment_2']);
    }

    /**
     * @return void
     */
    public function testComments02(): void
    {
        $response = $this->stadium->comments(raceNumber: 7, date: '2024-12-07');
        $this->assertSame('浜田亜理沙', $response['bracket_1_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_1_racer_comment_1_label']);
        $this->assertSame('休み明けではっきりしないけど、久々にしてはいい感じがした。', $response['bracket_1_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_1_racer_comment_2_label']);
        $this->assertSame('起こしでややもたつく感じがあり、スピードの乗りも微妙。', $response['bracket_1_racer_comment_2']);
        $this->assertSame('大瀧明日香', $response['bracket_2_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_2_racer_comment_1_label']);
        $this->assertSame('足合わせはしてないけど、特訓は少し劣勢な感じがした。', $response['bracket_2_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_2_racer_comment_2_label']);
        $this->assertSame('起こしの反応、加速感ともに悪くない。', $response['bracket_2_racer_comment_2']);
        $this->assertSame('小野桜', $response['bracket_3_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_3_racer_comment_1_label']);
        $this->assertSame('遠藤(エミ)選手と合わせて変わらなかったし、悪くない。', $response['bracket_3_racer_comment_1']);
        $this->assertSame('試運転記者の目', $response['bracket_3_racer_comment_2_label']);
        $this->assertSame('行き足、伸びとも大滝明日香と似たり寄ったり。', $response['bracket_3_racer_comment_2']);
        $this->assertSame('黒明花夢', $response['bracket_4_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_4_racer_comment_1_label']);
        $this->assertSame('少し回ってる感じだったけど、体感はそんなに悪くなかった。', $response['bracket_4_racer_comment_1']);
        $this->assertSame('1走目記者の目', $response['bracket_4_racer_comment_2_label']);
        $this->assertSame('1Mは八木治樹の引き波にはまって後退。スリット付近の伸びも微妙だった。', $response['bracket_4_racer_comment_2']);
        $this->assertSame('倉田郁美', $response['bracket_5_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_5_racer_comment_1_label']);
        $this->assertSame('回り過ぎで軽い感じ。ターンが怖いし、滑る感じがした。', $response['bracket_5_racer_comment_1']);
        $this->assertSame('1走目記者の目', $response['bracket_5_racer_comment_2_label']);
        $this->assertSame('スタートで遅れたことはあるが、舟が向いてからの押しもひと息な印象。', $response['bracket_5_racer_comment_2']);
        $this->assertSame('長尾萌加', $response['bracket_6_racer_name']);
        $this->assertSame('前日コメント', $response['bracket_6_racer_comment_1_label']);
        $this->assertSame('(前回使用者の)伸び型は得意じゃないので調整する。', $response['bracket_6_racer_comment_1']);
        $this->assertSame('1走目記者の目', $response['bracket_6_racer_comment_2_label']);
        $this->assertSame('スリット付近の伸びはひと息。ターンで暴れる感じもあった。', $response['bracket_6_racer_comment_2']);
    }
}
