<?php

require('Menu.php');
require('StdinStub.php');
require('StdoutSpy.php');

class MenuTest extends PHPUnit_Framework_TestCase
{
  public function test１が選ばれて、fizzbuzzの対応する結果が帰ってくる()
  {
    $stub = new StdinStub(15);
    $spy = new StdoutSpy();
    (new Menu($spy,$stub))->select(1);
    $this->assertEquals('FizzBuzz',$spy->result());
  }

}
