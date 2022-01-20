<?php

namespace omikuji\lib;

require_once(__DIR__ . '/RuleInterface.php');

class Handle
{
    public function drawOmikuji(Rule $rule, array $players): void
    {
        $rule->drawOmikuji($players);
    }

    public function juge(Rule $rule, array $players): string
    {
        return $rule->jugePlayer($players);
    }
}
