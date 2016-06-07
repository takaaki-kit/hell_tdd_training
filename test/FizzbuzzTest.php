
<?php

require('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  public function test１５を入力したらfizzbuzzが帰ってくる()
  {
    $this->assertEquals('FizzBuzz',(new FizzBuzz(15))->start());
  }
}
