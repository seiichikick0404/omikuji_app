<?php

namespace omikuji\lib;

Interface Rule
{
    public function drawOmikuji(array $players);
    public function jugePlayer(array $omikujis, array $players);
}