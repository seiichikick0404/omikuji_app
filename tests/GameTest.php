<?php

namespace omikuji\lib\tests;

use PHPUnit\Framework\TestCase;
use omikuji\lib\Game;
use omikuji\lib\OnePlayerRule;
use omikuji\lib\TwoPlayerRule;

require_once(__DIR__ . '/../lib/GameClass.php');
require_once(__DIR__ . '/../lib/OnePlayerRuleClass.php');
require_once(__DIR__ . '/../lib/TwoPlayerRuleClass.php');

class GameTest extends TestCase
{
    public function testGame()
    {
        // プレイヤーが1人の場合
        $game = new Game(1, ['プレイヤー1']);
        $this->assertSame('プレイヤー1', $game->startGame());
    }

    public function testGetRule()
    {
        // オブジェクト型かチェック
        $game = new Game(1, ['プレイヤー1']);
        $rule = $game->getRule(1);
        $this->assertTrue(is_object($rule));

        // オブジェクトが1人用ルールのチェック
        $this->assertTrue($rule instanceof OnePlayerRule);

        // オブジェクトが2人用ルールのチェック
        $rule = $game->getRule(2);
        $this->assertTrue($rule instanceof TwoPlayerRule);
    }
}
