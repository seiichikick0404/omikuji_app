<?php

namespace omikuji\lib;

use omikuji\lib\TwoPlayerRule;
use omikuji\lib\OnePlayerRule;

require_once(__DIR__ . '/PlayerClass.php');
require_once(__DIR__ . '/OnePlayerRuleClass.php');
require_once(__DIR__ . '/TwoPlayerRuleClass.php');

class Game
{
    private int $playerNum = 0;

    public function __construct(int $playerNum)
    {
        $this->playerNum = $playerNum;
    }

    public function startGame(): string
    {
        $player = new Player();
        $rule = $this->getRule($this->playerNum);

        echo 'おみくじゲームを開始します' . PHP_EOL;



        return 'プレイヤー1';
    }

    public function getRule(int $playerNum): object
    {   
        if ($playerNum === 1) {
            return new OnePlayerRule();
        } elseif ($playerNum === 2) {
            return new TwoPlayerRule();
        }
    }
}

$game = new Game(1);
$game->startGame();
exit;