<?php

class StdoutSpy
{
  private $buffers = [];

  public function result()
  {
    return $this->buffers;
  }

  public function puts($buffer)
  {
    $this->buffers[] = $buffer;
  }
}
