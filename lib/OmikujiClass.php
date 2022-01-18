<?php

namespace omikuji\lib;

class Omikuji
{
    const OMIKUJI_RANKS = [
        [
            'name' => '大吉',
            'rank' => 7,
        ],
        [
            'name' => '吉',
            'rank' => 6,
        ],
        [
            'name' => '中吉',
            'rank' => 5,
        ],
        [
            'name' => '小吉',
            'rank' => 4,
        ],
        [
            'name' => '末吉',
            'rank' => 3,
        ],
        [
            'name' => '凶',
            'rank' => 2,
        ],
        [
            'name' => '大凶',
            'rank' => 1,
        ],
    ];

    
    public function randomOmikuji(): array
    {
        $arrayKey = (array_rand(self::OMIKUJI_RANKS, 1));
        return  self::OMIKUJI_RANKS[$arrayKey];
    }
}