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
    public function drawOmikuji(array $players): array
    {
        $omikuji = new Omikuji();

        return $players[0]->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $omikujis, array $players)
    {

    }
}