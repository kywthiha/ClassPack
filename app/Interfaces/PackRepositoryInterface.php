<?php

namespace App\Interfaces;

use App\Models\Pack;

interface PackRepositoryInterface
{
    public function getAll(): array;
    public function getDetailByPack(Pack $pack): Pack;
}
