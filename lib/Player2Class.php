<?php

namespace omikuji\lib;

class Player2
{
    private string $name = 'プレイヤー2';
    
    public function drawOmikuji(Omikuji $omikuji)
    {
        return $omikuji->randomOmikuji();
    }
}
