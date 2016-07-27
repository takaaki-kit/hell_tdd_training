<?php

require_once('Menu.php');
require_once('StdinStub.php');
require_once('StdoutSpy.php');
require_once('QuestionRepository.php');
require_once('Helper/base.php');

class MenuTest extends Test_Base
{
    public function test１が選ばれて、fizzbuzzの対応する結果が帰ってくる()
    {
        $stub = new StdinStub('15');
        $spy = new StdoutSpy();
        (new Menu($spy,$stub,new QuestionRepository()))->select('1');
        $this->assertEquals(['FizzBuzz'],$spy->result());
    }

    public function test１が選ばれて、正の整数以外がfizzbuzzに入力されると文字列エラーが帰る()
    {
        $stub = new StdinStub('a');
        $spy = new StdoutSpy();
        (new Menu($spy,$stub,new QuestionRepository()))->select('1');
        $this->assertEquals(['エラー'],$spy->result());
    }

    public function test存在しないメニューが選択された時、何もしない()
    {
        $noMenuNumber = '13579';
        $stub = new StdinStub('');
        $spy = new StdoutSpy();
        (new Menu($spy,$stub,new QuestionRepository()))->select($noMenuNumber);
        $this->assertEquals([],$spy->result());
    }

    public function test2が選ばれて、これまでのfizzbuzzの結果が表示される()
    {
        $spy = new StdoutSpy();

        $fizz = new Question(3);
        $buzz = new Question(5);

        $repository = new QuestionRepository();
        $repository->register($fizz);
        $repository->register($buzz);

        $menu = new Menu($spy,NULL,$repository);

        $menu->select('2');
        $this->assertEquals([$fizz->toString(),$buzz->toString()], $spy->result());
    }

    public function test1が呼ばれて結果が状態に保存される()
    {
        $stub = new StdinStub('15');
        $spy = new StdoutSpy();
        $repository = new QuestionRepository();
        $menu = new Menu($spy,$stub,$repository);
        $menu->select('1');
        $this->assertEquals((new Question(15))->toString(),$repository->all()[0]->toString());
    }

    public function test3が呼ばれて、これまでのfizzbuzzの結果がファイルに保存される()
    {
        $fizz = new Question(3);
        $buzz = new Question(5);

        $repository = new QuestionRepository();
        $repository->register($fizz);
        $repository->register($buzz);

        $menu = new Menu(NULL, NULL,$repository);
        $menu->select('3');

        $this->assertEquals([$fizz->toString(), $buzz->toString()], ((new File(self::FILE_PATH))->read()));
    }

    public function test4が呼ばれたとき、ファイルの内容を出力すること()
    {
        $spy = new StdoutSpy();

        $fizz = new Question(3);
        $buzz = new Question(5);

        $repository = new QuestionRepository();
        $repository->register($fizz);
        $repository->register($buzz);

        $menu = new Menu($spy,NULL,$repository);
        $menu->select('3');
        $menu->select('4');

        $this->assertEquals([$fizz->toString(), $buzz->toString()], $spy->result());
    }
}
