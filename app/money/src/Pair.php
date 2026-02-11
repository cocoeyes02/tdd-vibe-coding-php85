<?php

declare(strict_types=1);

namespace Money;

class Pair
{
    private string $from;
    private string $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function hashCode(): string
    {
        return $this->from . ':' . $this->to;
    }
}
