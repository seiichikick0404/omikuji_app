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
        $omikujiArr = $rule->drawOmikuji();

        // 配列かチェック
        $this->assertTrue(is_array($omikujiArr));

        // 配列構成　キーのチェック name
        $this->assertArrayHasKey('name', $omikujiArr);

        // 配列構成　キーのチェック rank
        $this->assertArrayHasKey('rank', $omikujiArr);
    }
}