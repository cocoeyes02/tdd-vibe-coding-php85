<?php

declare(strict_types=1);

namespace Money\Tests;

use Money\Money;
use PHPUnit\Framework\TestCase;

class FrancTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = Money::franc(5);
        $product = $five->times(2);
        $this->assertTrue(Money::franc(10)->equals($product));
        $product = $five->times(3);
        $this->assertTrue(Money::franc(15)->equals($product));
    }
}
