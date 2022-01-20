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
    public function drawOmikuji(array $players): void
    {
        $omikuji = new Omikuji();
       
        $players[0]->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $players): string
    {
        $winner = 'プレイヤー1';
        $this->displayResult($players, $winner);

        return 'プレイヤー1';
    }

    public function displayResult(array $players, string $winner)
    {
        echo '-------------結果---------------------------' . PHP_EOL;
        $results = $players[0]->getOmikujiArr();
        echo $players[0]->getName() . 'が引いたのは' . $results['name'] . 'です' . PHP_EOL; 
        echo '勝者は' . $winner . 'です' . PHP_EOL;
    }
}