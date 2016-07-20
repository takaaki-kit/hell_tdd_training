
<?php

require_once('Question.php');

class QuestionTest extends PHPUnit_Framework_TestCase
{
  public function test0を入力したら0が帰ってくる()
  {
    $this->assertEquals('0',(new Question(0))->start());
  }

  public function test３の倍数を入力したらfizzが帰ってくる()
  {
    $this->assertEquals('Fizz',(new Question(3))->start(),'fail at 3');
    $this->assertEquals('Fizz',(new Question(6))->start(),'fail at 6');
  }

  
  public function test５の倍数を入力したらbuzzが帰ってくる()
  {
    $this->assertEquals('Buzz',(new Question(5))->start(),'fail at 5');
    $this->assertEquals('Buzz',(new Question(10))->start(),'fail at 10');
  }


  public function test１５を入力したらfizzbuzzが帰ってくる()
  {
    $this->assertEquals('FizzBuzz',(new Question(15))->start(),'fail at 15');
    $this->assertEquals('FizzBuzz',(new Question(30))->start(),'fail at 30');
  }


  public function testそれ以外を入力したら1が帰ってくる()
  {
    $this->assertEquals('1',(new Question(1))->start(),'fail at 1');
    $this->assertEquals('2',(new Question(2))->start(),'fail at 2');
  }

  public function test自分自身の文字列を返す()
  {
    $this->assertEquals('3 Fizz',(new Question(3))->toString());
  }
}
