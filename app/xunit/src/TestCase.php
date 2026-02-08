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

    public function run(): void
    {
        $this->setUp();
        $method = $this->name;
        $this->$method();
    }
}
