<?php

namespace omikuji\lib;

use omikuji\lib\TwoPlayerRule;
use omikuji\lib\OnePlayerRule;
use omikuji\lib\Player;


require_once(__DIR__ . '/PlayerClass.php');
require_once(__DIR__ . '/OnePlayerRuleClass.php');
require_once(__DIR__ . '/TwoPlayerRuleClass.php');
require_once(__DIR__ . '/HandleClass.php');

class Game
{
    private int $playerNum = 0;
    private array $playerNameArr = [];

    public function __construct(int $playerNum, array $playerNameArr)
    {
        $this->playerNum = $playerNum;
        $this->playerNameArr = $playerNameArr; 
    }

    public function startGame(): string
    {
        $handle = new Handle();
        $rule = $this->getRule($this->playerNum);
        $players = $this->getPlayers(); 

        echo 'おみくじゲームを開始します' . PHP_EOL;

        $omikujis = $handle->drawOmikuji($rule, $players);
        $result = $handle->juge($rule, $omikujis, $players);

        return $result;
    }

    public function getRule(int $playerNum): object
    {   
        if ($playerNum === 1) {
            return new OnePlayerRule();
        } elseif ($playerNum === 2) {
            return new TwoPlayerRule();
        }
    }

    public function getPlayers(): array
    {

        if ($this->playerNum === 1) {
            $player1 = new Player($this->playerNameArr[0]);
            return [$player1];
        } elseif ($this->playerNum === 2) {
            $player1 = new Player($this->playerNameArr[0]);
            $player2 = new Player($this->playerNameArr[1]);
            return [$player1, $player2];
        }
    }
}

// $game = new Game(1);
// $game->startGame();
// exit;