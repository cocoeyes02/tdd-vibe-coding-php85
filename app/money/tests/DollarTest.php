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
        $this->assertTrue((new Dollar(10))->equals($product));
        $product = $five->times(3);
        $this->assertTrue((new Dollar(15))->equals($product));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
