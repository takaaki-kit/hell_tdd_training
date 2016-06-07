<?php

class StdinStub
{

  public function __construct($input)
  {
    $this->input = $input;
  }

  public function get()
  {
    return $this->input;
  }

}
