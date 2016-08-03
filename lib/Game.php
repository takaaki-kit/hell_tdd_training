<?php

class Game{

    public function __construct($out,$in,$repository)
    {
        $this->in = $in;
        $this->out = $out;
        $this->repository = $repository;
    }

    public function run()
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
}
