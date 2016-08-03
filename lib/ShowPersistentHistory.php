<?php

class ShowPersistentHistory{
    public function __construct($out, $repository)
    {
        $this->out = $out;
        $this->repository = $repository;
    }

    public function run()
    {
        foreach($this->repository->persistent_all() as $fizzbuzz){
            $this->out->puts($fizzbuzz->toString());
        }
    }
}
