<?php

namespace omikuji\lib;

require_once(__DIR__ . '/PlayerClass.php');

class Game
{
    public function startGame(): string
    {
        $player = new Player();

        echo 'おみくじゲームを開始します' . PHP_EOL;

        $input = $this->displayHandle();
        if ($this->isPlay($input)) {
            $player->doOmikuji();
        } elseif (!$this->isPlay($input)) {
            echo 'おみくじゲームを終了します';
            exit;
        }

        return 'プレイヤー1';
    }

    public function displayHandle()
    {
        echo 'おみくじを引きますか？（Y/N）' . PHP_EOL;
        $input = fgets(STDIN);

        return $input;
    }

    public function isPlay($input): bool
    {
        // 前後のスペース削除
        $select = trim($input, "\t\n\r\0\x0B");
        $bool = true;

        if ($select === 'Y') {
            $bool = true;
        } elseif ($select === 'N') {
            $bool = false;
        }

        return $bool;
    }
}