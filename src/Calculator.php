<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $valueOne, int $valueTwo): int
   {
       return $valueOne * $valueTwo;
   }
   public function isEven(int $val): bool
 {
   return $val % 2 == 0;

 }

}

