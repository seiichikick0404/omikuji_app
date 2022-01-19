<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Player;
use omikuji\lib\Omikuji;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');

class OnePlayerRule implements Rule
{
    public function drawOmikuji(array $players): array
    {
        $omikuji = new Omikuji();
       
        return $players[0]->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $omikujis, array $players): string
    {
        $this->displayResult($omikujis, $players);

        return 'プレイヤー1';
    }

    public function displayResult(array $omikujis, array $players)
    {
        echo '-------------結果---------------------------' . PHP_EOL;
        echo $players[0]->getName() . 'が引いたのは' . $omikujis['name'] . 'です' . PHP_EOL; 
    }
}