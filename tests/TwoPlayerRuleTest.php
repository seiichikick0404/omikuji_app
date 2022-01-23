<?php

namespace omikuji\lib;

use PHPUnit\Framework\TestCase;
use omikuji\lib\TwoPlayerRule;
use omikuji\lib\Player;

class TwoPlayerRuleTest extends TestCase
{
    public function testDrawOmikuji()
    {
        $rule = new TwoPlayerRule();
        $player1 = new Player('プレイヤー1');
        $player2 = new Player('プレイヤー2');
        $players = [$player1, $player2];
        $rule->drawOmikuji($players);
        $omikujiArr1 = $player1->getOmikujiArr();
        $omikujiArr2 = $player2->getOmikujiArr();

        // 配列かチェック
        $this->assertTrue(is_array($omikujiArr1));
        $this->assertTrue(is_array($omikujiArr2));

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('name', $omikujiArr1);
        $this->assertArrayHasKey('name', $omikujiArr2);

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('rank', $omikujiArr1);
        $this->assertArrayHasKey('rank', $omikujiArr2);
    }

    public function testJugePlayer()
    {
        $rule = new TwoPlayerRule();
        $player1 = new Player('プレイヤー1');
        $player2 = new Player('プレイヤー2');
        $players = [$player1, $player2];
        $rule->drawOmikuji($players);

        // 型チェック string
        $this->assertTrue(is_string($rule->jugePlayer($players)));

        // 勝敗チェック
        $omikujiArr1 = $players[0]->getOmikujiArr();
        $omikujiArr2 = $players[1]->getOmikujiArr();

        $winner = '';
        if ($omikujiArr1['rank'] > $omikujiArr2['rank']) {
            $winner = $players[0]->getName();
        } elseif ($omikujiArr1['rank'] < $omikujiArr2['rank']) {
            $winner = $players[1]->getName();
        } elseif ($omikujiArr1['rank'] === $omikujiArr2['rank']) {
            $winner = '引き分け';
        }

        $this->assertSame($winner, ($rule->jugePlayer($players)));
    }
}