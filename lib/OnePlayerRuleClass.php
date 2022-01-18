<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Player;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');

class OnePlayerRule implements Rule
{
    public function drawOmikuji()
    {
        $omikuji = new Omikuji();
        $player = new Player();
        $player->drawOmikuji($omikuji);

    }
}