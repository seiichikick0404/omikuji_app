<?php

namespace omikuji\lib;

class Player
{
    private string $name = '';
    private array $omikujiArr = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * おみくじを引く
     * @param Omikuji $omikuji
     * @return array $drawArr
     */
    public function drawOmikuji(Omikuji $omikuji): array
    {
        $drawArr = $omikuji->randomOmikuji();
        $this->omikujiArr = $drawArr;
        return $drawArr;
    }

    /**
     * プレイヤーの名前を取得
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 取得したおみくじ配列の取得
     * @return array $omikujiArr
     */
    public function getOmikujiArr(): array
    {
        return $this->omikujiArr;
    }
}
