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

    public function drawOmikuji(Omikuji $omikuji)
    {
        $drawArr = $omikuji->randomOmikuji();
        $this->omikujiArr = $drawArr;
        return $drawArr;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOmikujiArr(): array 
    {
        return $this->omikujiArr;
    }
}
