<?php

namespace omikuji\lib;

use PHPUnit\Framework\TestCase;
use omikuji\lib\Omikuji;

class OmikujiTest extends TestCase
{
    public function testRandomOmikuji()
    {
        $omikuji = new Omikuji();
        $omikujiArr = $omikuji->randomOmikuji();

        // 配列かチェック
        $this->assertTrue(is_array($omikujiArr));

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('name', $omikujiArr);

        // 配列構成　キーのチェック rank
        $this->assertArrayHasKey('rank', $omikujiArr);
    }
}
