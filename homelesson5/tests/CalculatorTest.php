<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{

    public function testAdd(): void
    {
        $calculator = new Calculator();

        self::assertEquals(0, $calculator->add(2, -2));
        self::assertEquals(0, $calculator->add(-2, 2));
        self::assertEquals(4, $calculator->add(2, 2));
        self::assertEquals(-4, $calculator->add(-2, -2));
    }

    public function testSubtract(): void
    {
        $calculator = new Calculator();

        self::assertEquals(0, $calculator->subtract(2, 2));
        self::assertEquals(0, $calculator->subtract(-2, -2));
        self::assertEquals(4, $calculator->subtract(2, -2));
        self::assertEquals(-4, $calculator->subtract(-2, 2));
    }

    public function testMultiply(): void
    {
        $calculator = new Calculator();

        self::assertEquals(0, $calculator->multiply(0, -2));
        self::assertEquals(4, $calculator->multiply(2, 2));
        self::assertEquals(4, $calculator->multiply(-2, -2));
        self::assertEquals(-4, $calculator->multiply(2, -2));
        self::assertEquals(-4, $calculator->multiply(-2, 2));

    }

    public function testDivide(): void
    {
        $calculator = new Calculator();

        self::assertEquals(0, $calculator->divide(0, 2));
        self::assertEquals(1, $calculator->divide(2, 2));
        self::assertEquals(0.5, $calculator->divide(2, 4));
        self::assertEquals(2, $calculator->divide(-4, -2));
        self::assertEquals(-2, $calculator->divide(4, -2));
        self::assertEquals(-2, $calculator->divide(-4, 2));
    }

    public function testDivideException(): void
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Divider cant be a zero');
        $calculator->divide(1, 0);
    }

    public function testPow(): void
    {
        $calculator = new Calculator();

        self::assertEquals(1, $calculator->pow(0, 0));
        self::assertEquals(1, $calculator->pow(2, 0));
        self::assertEquals(1, $calculator->pow(-2, 0));
        self::assertEquals(4, $calculator->pow(2, 2));
        self::assertEquals(4, $calculator->pow(-2, 2));
        self::assertEquals(0.25, $calculator->pow(-2, -2));
        self::assertEquals(0.25, $calculator->pow(2, -2));
    }

    public function testRadical(): void
    {
        $calculator = new Calculator();

        self::assertEquals(1, $calculator->radical(1));
        self::assertEquals(0, $calculator->radical(0));
        self::assertEquals(2, $calculator->radical(4));
        self::assertEquals(1.4142135623731, $calculator->radical(2));
    }

    public function testRadicalException(): void
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The number must be at least zero');
        $calculator->radical(-5);
    }
}