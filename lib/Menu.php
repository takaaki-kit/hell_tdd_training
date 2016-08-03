<?php

require_once('Question.php');
require_once('IntegerValidator.php');
require_once('Game.php');
require_once('ShowTemporaryHistory.php');
require_once('SaveHistory.php');
require_once('ShowPersistentHistory.php');
require_once('nothingToDo.php');

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
        $this->create_command($mode)->run();
    }

    private function create_command($mode)
    {
        if($mode === '1'){
            return (new Game($this->out, $this->in, $this->repository));
        }

        if($mode === '2'){
            return (new ShowTemporaryHistory($this->out, $this->repository));
        }

        if($mode === '3'){
            return (new SaveHistory($this->repository));
        }

        if($mode === '4'){
            return (new ShowPersistentHistory($this->out, $this->repository));
        }

        return new nothingToDo();
    }
}
