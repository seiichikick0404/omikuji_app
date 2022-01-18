<?php

namespace omikuji\lib;

class Player
{
    public function drawOmikuji(Omikuji $omikuji)
    {
        return $omikuji->randomOmikuji();
    }
}
