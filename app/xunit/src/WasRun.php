<?php

declare(strict_types=1);

namespace Xunit;

class WasRun extends TestCase
{
    public bool $wasRun = false;

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}
