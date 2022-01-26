<?php

namespace omikuji\lib;

use omikuji\lib\TwoPlayerRule;
use omikuji\lib\OnePlayerRule;
use omikuji\lib\Player;
use omikuji\lib\Handle;

require_once(__DIR__ . '/PlayerClass.php');
require_once(__DIR__ . '/OnePlayerRuleClass.php');
require_once(__DIR__ . '/TwoPlayerRuleClass.php');
require_once(__DIR__ . '/HandleClass.php');

class Game
{
    /**
     * プレイヤー参加人数
     * @var int
     */
    private int $playerNum = 0;

    /**
     * 参加プレイヤー名格納配列
     * @var array<string>
     */
    private array $playerNameArr = [];

    /**
     * 初期値セット
     * @param int $playerNum
     * @param array<string> $playerNameArr
     */
    public function __construct(int $playerNum, array $playerNameArr)
    {
        $this->playerNum = $playerNum;
        $this->playerNameArr = $playerNameArr;
    }

    /**
     * ゲーム実行メソッドです
     * @return string $result
     */
    public function startGame(): string
    {
        $handle = new Handle();
        $rule = $this->getRule($this->playerNum);
        $players = $this->getPlayers();

        echo 'おみくじゲームを開始します' . PHP_EOL;

        $handle->drawOmikuji($rule, $players);
        $result = $handle->juge($rule, $players);

        return $result;
    }

    /**
     * ルールの取得メソッド
     * @param int $playerNum
     * @return Rule $rule
     */
    public function getRule(int $playerNum): object
    {
        $rule = '';

        if ($playerNum === 1) {
            $rule =  new OnePlayerRule();
        } elseif ($playerNum === 2) {
            $rule = new TwoPlayerRule();
        }

        return $rule;
    }

    /**
     * 参加プレイヤー数取得
     * @return array<object>
     */
    public function getPlayers(): array
    {
        $players = [];

        if ($this->playerNum === 1) {
            $player1 = new Player($this->playerNameArr[0]);
            $players = [$player1];
        } elseif ($this->playerNum === 2) {
            $player1 = new Player($this->playerNameArr[0]);
            $player2 = new Player($this->playerNameArr[1]);
            $players = [$player1, $player2];
        }

        return $players;
    }
}

// $game = new Game(1, ['プレイヤー1']);
// $game->startGame();
// exit;

// $game = new Game(2, ['プレイヤー1', 'プレイヤー2']);
// $game->startGame();
// exit;
