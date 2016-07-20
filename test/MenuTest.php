<?php

require('Menu.php');
require('StdinStub.php');
require('StdoutSpy.php');
require('FizzBuzzRepository.php');

class MenuTest extends PHPUnit_Framework_TestCase
{
  public function test１が選ばれて、fizzbuzzの対応する結果が帰ってくる()
  {
    $stub = new StdinStub('15');
    $spy = new StdoutSpy();
    (new Menu($spy,$stub,new FizzBuzzRepository()))->select('1');
    $this->assertEquals(['FizzBuzz'],$spy->result());
  }

  public function test１が選ばれて、正の整数以外がfizzbuzzに入力されると文字列エラーが帰る()
  {
    $stub = new StdinStub('a');
    $spy = new StdoutSpy();
    (new Menu($spy,$stub,new FizzBuzzRepository()))->select('1');
    $this->assertEquals(['エラー'],$spy->result());
  }

  public function test存在しないメニューが選択された時、何もしない()
  {
    $noMenuNumber = '13579';
    $stub = new StdinStub('');
    $spy = new StdoutSpy();
    (new Menu($spy,$stub,new FizzBuzzRepository()))->select($noMenuNumber);
    $this->assertEquals([],$spy->result());
  }

  public function test2が選ばれて、これまでのfizzbuzzの結果が表示される()
  {
    $spy = new StdoutSpy();

    $fizzbuzz1 = new Question(3);
    $fizzbuzz2 = new Question(5);

    $repository = new FizzBuzzRepository();
    $repository->register($fizzbuzz1);
    $repository->register($fizzbuzz2);

    $menu = new Menu($spy,NULL,$repository);

    $menu->select('2');
    $this->assertEquals([$fizzbuzz1->toString(),$fizzbuzz2->toString()], $spy->result());
  }

  public function test1が呼ばれて結果が状態に保存される()
  {
    $stub = new StdinStub('15');
    $spy = new StdoutSpy();
    $repository = new FizzBuzzRepository();
    $menu = new Menu($spy,$stub,$repository);
    $menu->select('1');
    $this->assertEquals((new Question(15))->toString(),$repository->all()[0]->toString());
  }
}
