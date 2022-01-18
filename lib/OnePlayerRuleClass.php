<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Player;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');

class OnePlayerRule implements Rule
{
    public function drawOmikuji(): array
    {
        $omikuji = new Omikuji();
        $player = new Player();

        return $player->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $omikujis): string
    {
        $this->displayResult($omikujis);

        return 'プレイヤー1';
    }

    public function displayResult(array $omikujis)
    {
        echo '-------------結果---------------------------' . PHP_EOL;
        echo 'プレイヤーが引いたのは' . $omikujis['name'] . 'です' . PHP_EOL; 
    }
}