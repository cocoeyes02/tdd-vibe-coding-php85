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
        $this->assertSame('setUp testMethod ', $test->log);
    }
}
