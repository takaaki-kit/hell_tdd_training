<?php

class FizzBuzz
{

  public function __construct($number)
  {
    $this->number = $number;
  }
  public function start()
  {
    if($this->number % 15 === 0){
      return 'FizzBuzz';
    }

    if($this->number % 3 === 0){
      return 'Fizz';
    }
    return 'Buzz';

  }
}
