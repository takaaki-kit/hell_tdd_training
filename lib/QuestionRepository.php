<?php

class QuestionRepository
{
    private $fizzbuzzes = [];

    public function register($fizzbuzz)
    {
        $this->fizzbuzzes[] = $fizzbuzz;
    }

    public function all()
    {
        return $this->fizzbuzzes;
    }
}