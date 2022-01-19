<?php

namespace omikuji\lib;

use PHPUnit\Framework\TestCase;
use omikuji\lib\Player;

class PlayerTest extends TestCase
{
    public function testDrawOmikuji()
    {
        $player = new Player('プレイヤー1');
        $omikuji = new Omikuji();
        $omikujiArr = $player->drawOmikuji($omikuji);

        // 配列かチェック
        $this->assertTrue(is_array($omikujiArr));

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('name', $omikujiArr);

        // 配列構成　キーのチェック rank
        $this->assertArrayHasKey('rank', $omikujiArr);
    }

    public function testGetName()
    {
        // 型がstringかチェック
        $player = new Player('プレイヤー1');
        $this->assertTrue(is_string($player->getName()));

        // セットした名前が返却されるかチェック
        $this->assertSame('プレイヤー1', $player->getName());
    }
}