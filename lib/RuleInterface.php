<?php

namespace omikuji\lib;

interface Rule
{
    /**
     * おみくじを引く
     * @param array $players
     * @return void
     */
    public function drawOmikuji(array $players): void;

    /**
     * 勝敗判定
     * @param array $players
     * @return string
     */
    public function jugePlayer(array $players): string;

    /**
     * 結果を表示
     * @param array $players
     * @param string $winner
     * @return void
     */
    public function displayResult(array $players, string $winner): void;
}
