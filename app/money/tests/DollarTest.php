<?php

declare(strict_types=1);

namespace Money\Tests;

use Money\Dollar;
use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);
        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }
}
