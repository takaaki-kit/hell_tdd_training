<?php

require_once('FizzBuzz.php');
require_once('IntegerValidator.php');

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
      if((new IntegerValidator($input))->isInteger()){
        $this->out->puts((new FizzBuzz(intval($input)))->start());
      }else{
        $this->out->puts('エラー');
      }
    }
  }
}
