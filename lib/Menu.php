<?php

require_once('Question.php');
require_once('IntegerValidator.php');
require_once('Game.php');
require_once('ShowTemporaryHistory.php');
require_once('SaveHistory.php');
require_once('ShowPersistentHistory.php');

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
            (new Game($this->out, $this->in, $this->repository))->run();
        }

        if($mode === '2'){
            (new ShowTemporaryHistory($this->out, $this->repository))->run();
        }

        if($mode === '3'){
            (new SaveHistory($this->repository))->run();
        }

        if($mode === '4'){
            (new ShowPersistentHistory($this->out, $this->repository))->run();
        }
    }
}
