<?php

declare(strict_types=1);

namespace Money;

class Bank
{
    /** @var array<string, int> */
    private array $rates = [];

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $pair = new Pair($from, $to);
        $this->rates[$pair->hashCode()] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }
        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}
