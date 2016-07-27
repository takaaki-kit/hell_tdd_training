<?php

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
            $this->question_and_answer();
        }

        if($mode === '2'){
            $this->show_history();
        }

        if($mode === '3'){
            $this->save_history();
        }

        if($mode === '4'){
            $this->show_file();
        }
    }

    private function question_and_answer()
    {
        $input = $this->in->get();
        if((new IntegerValidator($input))->isInteger()){
            $fizzbuzz = new Question(intval($input));
            $this->out->puts($fizzbuzz->start());
            $this->repository->register($fizzbuzz);
        }else{
            $this->out->puts('エラー');
        }
    }

    private function show_history()
    {
        foreach($this->repository->temporary_all() as $fizzbuzz){
            $this->out->puts($fizzbuzz->toString());
        }
    }

    private function save_history()
    {
        $this->repository->save();
    }

    private function show_file()
    {
        foreach($this->repository->persistent_all() as $fizzbuzz){
            $this->out->puts($fizzbuzz->toString());
        }
    }
}
