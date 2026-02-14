<?php

declare(strict_types=1);

namespace Xunit;

class TestResult
{
    private int $runCount = 0;

    public function testStarted(): void
    {
        $this->runCount++;
    }

    public function summary(): string
    {
        return "{$this->runCount} run, 0 failed";
    }
}
