<?php

namespace omikuji\lib;

use omikuji\lib\Rule;
use omikuji\lib\Omikuji;

require_once(__DIR__ . '/RuleInterface.php');
require_once(__DIR__ . '/OmikujiClass.php');
require_once(__DIR__ . '/PlayerClass.php');

class TwoPlayerRule implements Rule
{
    public function drawOmikuji(array $players): void
    {
        $omikuji = new Omikuji();

        $players[0]->drawOmikuji($omikuji);
        $players[1]->drawOmikuji($omikuji);
    }

    public function jugePlayer(array $players): string
    {
        $player1Arr = $players[0]->getOmikujiArr();
        $player2Arr = $players[1]->getOmikujiArr();

        $winner = '';
        if ($player1Arr['rank'] > $player2Arr['rank']) {
            $winner = $players[0]->getName();
            $this->displayResult($players, $winner);
            return $players[0]->getName();
        } elseif ($player2Arr['rank'] > $player1Arr['rank']) {
            $winner = $players[1]->getName();
            $this->displayResult($players, $winner);
            return $players[1]->getName();
        } elseif ($player1Arr['rank'] === $player2Arr['rank']) {
            $winner ='draw';
            $this->displayResult($players, $winner);
            return '引き分け';
        }
    }

    public function displayResult(array $players, string $winner): void
    {
        echo '-------------結果---------------------------' . PHP_EOL;
        $results = $players[0]->getOmikujiArr();
        $results2 = $players[1]->getOmikujiArr();

        echo $players[0]->getName() . 'が引いたのは' . $results['name'] . 'です' . PHP_EOL; 
        echo $players[1]->getName() . 'が引いたのは' . $results2['name'] . 'です' . PHP_EOL;

        if ($winner === 'draw') {
            echo 'この勝負引き分けです' . PHP_EOL;
        } else {
            echo '勝者は' . $winner . 'です' . PHP_EOL;
        }
    }
}