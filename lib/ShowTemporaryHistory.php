<?php

class ShowTemporaryHistory{
    public function __construct($out,$repository)
    {
        $this->out = $out;
        $this->repository = $repository;
    }

    public function run()
    {
        foreach($this->repository->temporary_all() as $fizzbuzz){
            $this->out->puts($fizzbuzz->toString());
        }
    }
}
