<?php

namespace omikuji\lib\tests;

use PHPUnit\Framework\TestCase;
use omikuji\lib\Game;

require_once(__DIR__ . '/../lib/GameClass.php');

class GameTest extends TestCase
{
    public function testGame()
    {
        // プレイヤーが1人の場合
        $game = new Game(1);
        $this->assertSame('プレイヤー1', $game->startGame());
    }
}