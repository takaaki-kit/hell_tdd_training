<?php

require_once('FizzBuzz.php');

class Menu
{
  public function __construct($out,$in)
  {
    $this->in = $in;
    $this->out = $out;
  }

  public function select($mode)
  {
      $input = $this->in->get();
      $this->out->unko((new FizzBuzz($input))->start());
  }
}
