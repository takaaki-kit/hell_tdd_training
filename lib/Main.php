<?php

require_once('Menu.php');
require_once('QuestionRepository.php');

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

$menu = new Menu(new Stdout(),new Stdin(), new QuestionRepository());

while (true) {
  $value = trim(fgets(STDIN));

  if ($value === '0') {
    break;
  }
  $menu->select($value);
}


