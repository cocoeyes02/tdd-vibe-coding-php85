<?php

declare(strict_types=1);

namespace Xunit\Tests;

use PHPUnit\Framework\TestCase;
use Xunit\WasRun;

class TestCaseTest extends TestCase
{
    public function testSetUp(): void
    {
        $test = new WasRun('testMethod');
        $test->run();
        $this->assertSame('setUp testMethod tearDown ', $test->log);
    }

    public function testResult(): void
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        $this->assertSame('1 run, 0 failed', $result->summary());
    }

    public function testFailedResult(): void
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        $this->assertSame('1 run, 1 failed', $result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $test = new WasRun('testBrokenMethod');
        $test->run();
        $this->assertSame('setUp tearDown ', $test->log);
    }
}
