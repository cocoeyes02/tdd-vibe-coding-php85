<?php

declare(strict_types=1);

namespace Xunit;

class TestCase
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setUp(): void
    {
    }

    public function tearDown(): void
    {
    }

    public function run(): TestResult
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        try {
            $method = $this->name;
            $this->$method();
        } catch (\Throwable $e) {
            $result->testFailed();
        } finally {
            $this->tearDown();
        }
        return $result;
    }
}
