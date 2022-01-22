<?php

namespace omikuji\lib;

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../lib/PlayerClass.php');
require_once(__DIR__ . '/../lib/OnePlayerRuleClass.php');
require_once(__DIR__ . '/../lib/TwoPlayerRuleClass.php');
require_once(__DIR__ . '/../lib/HandleClass.php');

class HandleTest extends TestCase
{
    public function testDrawOmikuji()
    {
        // プレイヤー1人の場合
        $player1 = new Player('プレイヤー1');
        $rule = new OnePlayerRule();
        $players = [$player1];
        $handle = new Handle();
        $handle->drawOmikuji($rule, $players);
        $this->assertTrue($players[0]->getOmikujiArr() !== []);
        
        // プレイヤー2人の場合
        $player1 = new Player('プレイヤー1');
        $player2 = new Player('プレイヤー2');
        $rule = new TwoPlayerRule();
        $players = [$player1, $player2];
        $handle = new Handle();
        $handle->drawOmikuji($rule, $players);
        $this->assertTrue($players[0]->getOmikujiArr() !== []);
        $this->assertTrue($players[1]->getOmikujiArr() !== []);
    }

    public function testJuge()
    {
        // 1人の場合
        $player = new Player ('プレイヤー');
        $players = [$player];
        $rule = new OnePlayerRule();
        $handle = new Handle();
        $handle->drawOmikuji($rule, $players);
        $this->assertSame('プレイヤー', $handle->juge($rule, $players));
    
        // 2人の場合
        $player1 = new Player ('プレイヤー1');
        $player2 = new Player('プレイヤー2');
        $players = [$player1, $player2];
        $rule = new TwoPlayerRule();
        $handle = new Handle();
        $handle->drawOmikuji($rule, $players);
        $omikujiArr = $players[0]->getOmikujiArr();
        $omikujiArr2 = $players[1]->getOmikujiArr();
        if ($omikujiArr['rank'] > $omikujiArr2['rank']) {
            $winner = $players[0]->getName();
        } elseif ($omikujiArr['rank'] < $omikujiArr2['rank']) {
            $winner = $players[1]->getName();
        } elseif ($omikujiArr['rank'] === $omikujiArr2['rank']) {
            $winner = '引き分け';
        }
        $this->assertSame($winner, $handle->juge($rule, $players));
    }
}