<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Player;
use omikuji\lib\Omikuji;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');
require_once(__DIR__ . '/Player2Class.php');

class TwoPlayerRule implements Rule
{
    public function drawOmikuji(): array
    {
        $omikuji = new Omikuji();
        $player = new Player();

        return $player->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $omikujis)
    {

    }
}