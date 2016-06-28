<?php

class StdoutSpy
{
  private $str = NULL;
  public function result()
  {
    return $this->str;
  }

  public function puts($str)
  {
    $this->str = $str;
  }
}
