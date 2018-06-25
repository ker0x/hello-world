<?php

namespace Kerox\HelloWorld\Tests;

use Kerox\HelloWorld\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * @var \Kerox\HelloWorld\HelloWorld
     */
    private $helloWorld;

    public function setUp(): void
    {
        $this->helloWorld = new HelloWorld;
    }

    public function testAsFunction(): void
    {
        $helloWorld = $this->helloWorld;

        $this->assertEquals('Hello World', $helloWorld());
    }

    public function testWithExistingTranslation(): void
    {
        $helloWorld = $this->helloWorld;

        $this->assertEquals('Bonjour le monde', $helloWorld('fr'));
    }

    public function testWithUnExistingTranslation(): void
    {
        $helloWorld = $this->helloWorld;

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The translation for lang cn does not exist.');
        $helloWorld('cn');
    }

    public function tearDown(): void
    {
        unset($this->helloWorld);
    }
}
