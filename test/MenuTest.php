<?php

require('Menu.php');
require('StdinStub.php');
require('StdoutSpy.php');

class MenuTest extends PHPUnit_Framework_TestCase
{
  public function test１が選ばれて、１５を入力したらfizzbuzzが帰ってくる()
  {
    $stub = new StdinStub(15);
    $spy = new StdoutSpy();
    (new Menu($spy,$stub))->select(1);
    $this->assertEquals('FizzBuzz',$spy->result());
  }

  #public function test１が選ばれて、3を入力したらfizzが帰ってくる()
  #{
  #  $stub = new StdinStub(3);
  #  $spy = new StdoutSpy();
  #  (new Menu($spy,$stub))->select(1);
  #  $this->assertEquals('Fizz',$spy->result());
  #}
}
