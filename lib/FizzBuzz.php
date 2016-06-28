<?php

class FizzBuzz
{

  public function __construct($number)
  {
    $this->number = $number;
  }
  public function start()
  {
    if(!$this->isMultipleOfAll()){
      if($this->isMultipleOf(15)){
        return 'FizzBuzz';
      }

      if($this->isMultipleOf(3)){
        return 'Fizz';
      }

      if($this->isMultipleOf(5)){
        return 'Buzz';
      }
    }
    return strval($this->number);
  }

  private function isMultipleOfAll()
  {
   return $this->number === 0;
  }

  private function isMultipleOf($number)
  {
   return $this->number % $number === 0;
  }
}
