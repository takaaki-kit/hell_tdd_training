<?php

class QuestionRepository
{
    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    private $questions = [];

    public function register($fizzbuzz)
    {
        $this->questions[] = $fizzbuzz;
    }

    public function all()
    {
        return $this->questions;
    }

    public function write()
    {
        $fp = fopen($this->filepath, "a");
        foreach($this->questions as $answer){
            fwrite($fp, $answer->number() . "\n");
        }
        fclose($fp);
    }

    public function read()
    {
        $body = [];
        if(!file_exists($this->filepath)){
            return $body;
        }
        $fp = fopen($this->filepath, "r");
        while($line = fgets($fp)){
           $body[] = new Question(intval(trim($line)));
        }
        fclose($fp);
        return $body;
    }
}
