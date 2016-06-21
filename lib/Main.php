<?php

require_once('Menu.php');

class Stdin
{
  public function get()
  {
    return trim(fgets(STDIN));
  }
}

class Stdout
{
  public function puts($str)
  {
    print "$str\n";
  }
}

while (true) {
  $value = trim(fgets(STDIN));


  if ($value === '0') {
    break;
  }
  (new Menu(new Stdout(),new Stdin()))->select($value);
}


