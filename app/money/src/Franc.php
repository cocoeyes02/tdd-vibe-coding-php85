<?php

declare(strict_types=1);

namespace Money;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        parent::__construct($amount, 'CHF');
    }
}
