<?php

require_once('File.php');
require_once('Question.php');
require_once('IntegerValidator.php');

class Menu
{
    public function __construct($out,$in,$repository)
    {
        $this->in = $in;
        $this->out = $out;
        $this->repository = $repository;
    }

    public function select($mode)
    {
        if($mode === '1'){
            $input = $this->in->get();
            if((new IntegerValidator($input))->isInteger()){
                $fizzbuzz = new Question(intval($input));
                $this->out->puts($fizzbuzz->start());
                $this->repository->register($fizzbuzz);
            }else{
                $this->out->puts('エラー');
            }
        }

        if($mode === '2'){
            foreach($this->repository->all() as $fizzbuzz){
                $this->out->puts($fizzbuzz->toString());
            }
        }

        if($mode === '3'){
            foreach($this->repository->all() as $answer){
                (new File('logs/answer.txt'))->write($answer->toString());
            }
        }

        if($mode === '4'){
            foreach((new File('logs/answer.txt'))->read() as $answer){
                $this->out->puts($answer);
            }
        }
    }
}
