<?php

declare(strict_types=1);

namespace Xunit;

class WasRun extends TestCase
{
    public string $log = '';

    public function setUp(): void
    {
        $this->log = 'setUp ';
    }

    public function tearDown(): void
    {
        $this->log .= 'tearDown ';
    }

    public function testMethod(): void
    {
        $this->log .= 'testMethod ';
    }
}
