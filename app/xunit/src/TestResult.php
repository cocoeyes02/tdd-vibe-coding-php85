<?php

declare(strict_types=1);

namespace Xunit;

class TestResult
{
    private int $runCount = 0;
    private int $failCount = 0;

    public function testStarted(): void
    {
        $this->runCount++;
    }

    public function testFailed(): void
    {
        $this->failCount++;
    }

    public function summary(): string
    {
        return "{$this->runCount} run, {$this->failCount} failed";
    }
}
