<?php 

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testReturnsProperResult(): void {
        $arg = "World";
        $expected = "Hello, " . $arg;
        $this->assertSame(Index::hello($arg), $expected);
    }
}

// Run tests with '.vendor/bin/phpunit tests'
