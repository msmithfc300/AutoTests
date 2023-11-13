<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

public function testMultiplication(): void

{
        //Arrange
        $valueOne = 2;
        $valueTwo = 4;
        $expectedResult = 8;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($valueOne, $valueTwo);
        
        //Assert
        $this->assertSame($expectedResult, $multiplication, 
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

public function testIsEven (): void
{
        //Arrange
        $val = 3;
        $expectedResult = true;
        
        //Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($val);
        
        //Assert
        $this->assertTrue($expectedResult, $isEven,
            "La méthode isEven() ne fonctionne plus :-("
        );

}
}