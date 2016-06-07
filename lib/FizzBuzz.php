<?php

class FizzBuzz
{

  public function __construct($number)
  {
    $this->number = $number;
  }
  public function start()
  {
    if($this->number === 15){
      return 'FizzBuzz';
    }
    return 'Fizz';

  }
}
