<?php

namespace App\Interfaces;

use App\Models\PromoCode;

interface PromoCodeRepositoryInterface
{
    public function getPromoCodeByCode(string $code): ?PromoCode;
}
