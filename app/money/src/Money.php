<?php

declare(strict_types=1);

namespace Money;

class Money
{
    protected int $amount;
    protected string $currency;

    public function currency(): string
    {
        return $this->currency;
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }
}
