<?php

namespace omikuji\lib;

use PHPUnit\Framework\TestCase;
use omikuji\lib\OnePlayerRule;
use omikuji\lib\Player;

class OnePlayerRuleTest extends TestCase
{
    public function testDrawOmikuji()
    {
        $rule = new OnePlayerRule();
        $player = new Player('プレイヤー1');
        $players = [$player];
        $rule->drawOmikuji($players);
        $omikujiArr = $player->getOmikujiArr();

        // 配列かチェック
        $this->assertTrue(is_array($omikujiArr));

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('name', $omikujiArr);

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('rank', $omikujiArr);
    }

    public function testJugePlayer()
    {
        $rule = new OnePlayerRule();
        $player = new Player('プレイヤー1');
        $players = [$player];
        $rule->drawOmikuji($players);

        // 型チェック string
        $this->assertTrue(is_string($rule->jugePlayer($players)));

        // 勝敗チェック
        $this->assertSame('プレイヤー1', ($rule->jugePlayer($players)));
    }
}
