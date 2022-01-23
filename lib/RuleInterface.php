<?php

namespace omikuji\lib;

Interface Rule
{
    public function drawOmikuji(array $players);
    public function jugePlayer(array $players);
    public function displayResult(array $players, string $winner): void;
}