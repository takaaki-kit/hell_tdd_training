
<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  public function test１５を入力したらfizzbuzzが帰ってくる()
  {
    $this->assertEquals('FizzBuzz',(new FizzBuzz(15))->start());
  }
  public function test３を入力したらfizzが帰ってくる()
  {
    $this->assertEquals('Fizz',(new FizzBuzz(3))->start());
  }
  public function test５を入力したらbuzzが帰ってくる()
  {
    $this->assertEquals('Buzz',(new FizzBuzz(5))->start());
  }
  public function test30を入力したらfizzbuzzが帰ってくる()
  {
    $this->assertEquals('FizzBuzz',(new FizzBuzz(30))->start());
  }
}
