<?php

namespace omikuji\lib;

require_once(__DIR__ . '/RuleInterface.php');

class Handle
{
    public function drawOmikuji(Rule $rule): void
    {
        $rule->drawOmikuji();
    }
}