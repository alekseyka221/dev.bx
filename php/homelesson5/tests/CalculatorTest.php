<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once(__DIR__.'/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
    public function addDataProvider()
    {
        return [
          [2, -2, 0],
          [-2, 2, 0],
          [2, 2, 4],
          [-2, -2, -4]
        ];
    }
    /**
     * @dataProvider addDataProvider
     */
    public function testAdd(int $a, int $b, int $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->add($a, $b));
    }

    public function subtractDataProvider()
    {
        return [
            [2, 2, 0],
            [-2, -2, 0],
            [2, -2, 4],
            [-2, 2, -4]
        ];
    }

    /**
     * @dataProvider subtractDataProvider
     */

    public function testSubtract(int $a, int $b, int $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->subtract($a, $b));
    }

    public function multiplyDataProvider()
    {
        return [
            [0, -2, 0],
            [2, 2, 4],
            [-2, -2, 4],
            [-2, 2, -4],
            [2, -2, -4]
        ];
    }

    /**
     * @dataProvider multiplyDataProvider
     */
    public function testMultiply(int $a, int $b, int $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->multiply($a, $b));
    }

    public function divideDataProvider()
    {
        return [
            [0, -2, 0],
            [2, 2, 1],
            [2, 4, 0.5],
            [-4, -2, 2],
            [4, -2, -2]
        ];
    }

    /**
     * @dataProvider divideDataProvider
     */
    public function testDivide(int $a, int $b, float $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->divide($a, $b));
    }

    public function testDivideException(): void
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Divider cant be a zero');
        $calculator->divide(1, 0);
    }

    public function powDataProvider()
    {
        return [
            [0, 0, 1],
            [2, 0, 1],
            [-2, 0, 1],
            [2, 2, 4],
            [-2, 2, 4],
            [-2, -2, 0.25],
            [2, -2, 0.25]
        ];
    }

    /**
     * @dataProvider powDataProvider
     */

    public function testPow(int $a, int $b, float $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->pow($a, $b));
    }

    public function radicalDataProvider()
    {
        return [
            [1, 1],
            [0, 0],
            [4, 2],
            [2, 1.4142135623731],

        ];
    }

    /**
     * @dataProvider radicalDataProvider
     */
    public function testRadical(int $a, float $result): void
    {
        $calculator = new Calculator();

        self::assertEquals($result, $calculator->radical($a));
    }

    public function testRadicalException(): void
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The number must be at least zero');
        $calculator->radical(-5);
    }
}