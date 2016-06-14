
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
  public function test6を入力したらfizzが帰ってくる()
  {
    $this->assertEquals('Fizz',(new FizzBuzz(6))->start());
  }
  public function test10を入力したらbuzzが帰ってくる()
  {
    $this->assertEquals('Buzz',(new FizzBuzz(10))->start());
  }
  public function test1を入力したら1が帰ってくる()
  {
    $this->assertEquals('1',(new FizzBuzz(1))->start());
  }
  public function test2を入力したら2が帰ってくる()
  {
    $this->assertEquals('2',(new FizzBuzz(2))->start());
  }
  public function test0を入力したら0が帰ってくる()
  {
    $this->assertEquals('0',(new FizzBuzz(0))->start());
  }
}
