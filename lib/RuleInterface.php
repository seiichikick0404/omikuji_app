<?php

namespace omikuji\lib;

Interface Rule
{
    public function drawOmikuji();
    public function jugePlayer(array $omikujis);
}