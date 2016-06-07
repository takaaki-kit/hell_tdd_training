<?php

class StdoutSpy
{
  private $str = NULL;
  public function result()
  {
    return $this->str;
  }

  public function unko($str)
  {
    $this->str = $str;
  }
}
