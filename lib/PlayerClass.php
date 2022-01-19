<?php

namespace omikuji\lib;

class Player
{
    private string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function drawOmikuji(Omikuji $omikuji)
    {
        return $omikuji->randomOmikuji();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
