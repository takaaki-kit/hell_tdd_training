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
    if($mode === '1'){
      $input = $this->in->get();
      $this->out->puts((new FizzBuzz(intval($input)))->start());
    }
  }
}
