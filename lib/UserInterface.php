<?php

namespace omikuji\lib;

Interface User
{
    public function drawOmikuji(Omikuji $omikuji): array;
    public function getName(): string;
    public function getOmikujiArr(): array;

}