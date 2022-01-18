<?php

namespace omikuji\lib;

require_once(__DIR__ . '/RuleInterface.php');

class Handle
{
    public function drawOmikuji(Rule $rule): array
    {
        return $rule->drawOmikuji();
    }

    public function juge(Rule $rule, array $omikujis): string
    {
        return $rule->jugePlayer($omikujis);
    }
}