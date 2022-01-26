<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Omikuji;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');

class OnePlayerRule implements Rule
{
    /**
     * おみくじを引く
     * @param array<object> $players
     * @return void
     */
    public function drawOmikuji(array $players): void
    {
        $omikuji = new Omikuji();
        $players[0]->drawOmikuji($omikuji);
    }

    /**
     * 勝敗判定
     * @param array<object> $players
     * @return string $winner
     */
    public function jugePlayer(array $players): string
    {
        $winner = $players[0]->getName();
        $this->displayResult($players, $winner);

        return $winner;
    }

    /**
     * 結果を表示する
     * @param array<object> $players
     * @param string $winner
     * @return void
     */
    public function displayResult(array $players, string $winner): void
    {
        echo '-------------結果---------------------------' . PHP_EOL;
        $results = $players[0]->getOmikujiArr();
        echo $players[0]->getName() . 'が引いたのは' . $results['name'] . 'です' . PHP_EOL;
        echo '勝者は' . $winner . 'です' . PHP_EOL;
    }
}
