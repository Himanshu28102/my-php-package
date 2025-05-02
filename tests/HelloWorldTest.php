<?php

use PHPUnit\Framework\TestCase;
use MyPackage\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $helloWorld = new HelloWorld();
        $this->assertEquals('Hello, himanshu!', $helloWorld->sayHello());
    }
}