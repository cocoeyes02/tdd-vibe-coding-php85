<?php

declare(strict_types=1);

namespace Money;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        parent::__construct($amount, 'USD');
    }
}
