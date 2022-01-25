<?php

namespace omikuji\lib;

interface User
{
    public function drawOmikuji(Omikuji $omikuji): array;
    public function getName(): string;
    public function getOmikujiArr(): array;
}
