<?php

require_once('QuestionRepository.php');
require_once('Question.php');
require_once('Helper/base.php');

class QuestionRepositoryTest extends Test_Base
{
    public function testファイルの中身をすべて返す()
    {
        $repository = new QuestionRepository(self::FILE_PATH);
        $fizz = new Question(3);
        $buzz = new Question(5);
        $repository->register($fizz);
        $repository->register($buzz);
        $repository->save();

        $questions = $repository->persistent_all();
        $this->assertEquals([$fizz->toString(), $buzz->toString()], [$questions[0]->toString(), $questions[1]->toString()]);
    }

    public function testファイルが存在しない時は何も出力しないこと()
    {
        $repository = new QuestionRepository(self::FILE_PATH);

        $this->assertEquals([], $repository->persistent_all());
    }
}
