<?php

namespace omikuji\lib;

require_once(__DIR__ . '/RuleInterface.php');

class Handle
{
    /**
     * おみくじを引く
     * @param Rule $rule
     * @param array $players
     * @return void
     */
    public function drawOmikuji(Rule $rule, array $players): void
    {
        $rule->drawOmikuji($players);
    }

    /**
     * 勝者判定
     * @param Rule $rule
     * @param array $players
     * @return string
     */
    public function juge(Rule $rule, array $players): string
    {
        return $rule->jugePlayer($players);
    }
}
