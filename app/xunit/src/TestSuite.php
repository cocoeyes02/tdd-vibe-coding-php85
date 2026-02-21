<?php

declare(strict_types=1);

namespace Xunit;

class TestSuite
{
    /** @var TestCase[] */
    private array $tests = [];

    public function add(TestCase $test): void
    {
        $this->tests[] = $test;
    }

    public function run(): TestResult
    {
        $result = new TestResult();
        foreach ($this->tests as $test) {
            $test->run($result);
        }
        return $result;
    }
}
