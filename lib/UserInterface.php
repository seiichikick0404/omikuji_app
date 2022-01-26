<?php

namespace omikuji\lib;

interface User
{
    /**
     * おみくじを引く
     * @param Omikuji $omikuji
     * @return array<string|int>
     */
    public function drawOmikuji(Omikuji $omikuji): array;

    /**
     * プレイヤー名を取得
     * @return string
     */
    public function getName(): string;

    /**
     * 引いたおみくじ配列の取得
     * @return array<string|int>
     */
    public function getOmikujiArr(): array;
}
