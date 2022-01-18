<?php

namespace omikuji\lib\tests;

use PHPUnit\Framework\TestCase;
use omikuji\lib\Game;

require_once(__DIR__ . '/../lib/GameClass.php');

class GameTest extends TestCase
{
    // public function testGame()
    // {
    //     $game = new Game();
    //     $this->assertSame('プレイヤー1', $game->startGame());
    // }

    public function testIsPlay()
    {
        // ここのテストから
        $game = new Game();
        $input = 'Y';
        $this->assertSame(true, $game->isPlay($input));
    }
}