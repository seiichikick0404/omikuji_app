<?php

namespace omikuji\lib;

class Player
{
    private string $name = 'プレイヤー';
    
    public function drawOmikuji(Omikuji $omikuji)
    {
        return $omikuji->randomOmikuji();
    }
}
