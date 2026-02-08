<?php

declare(strict_types=1);

namespace Xunit;

class WasRun extends TestCase
{
    public bool $wasRun = false;
    public string $log = '';

    public function setUp(): void
    {
        $this->log = 'setUp ';
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}
