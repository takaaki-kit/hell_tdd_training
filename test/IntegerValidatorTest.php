<?php

require_once('IntegerValidator.php');

class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
    //整数（正、負）、少数（正、負）、アルファベット、文字列、記号、
    public function test整数の文字列が選ばれたらtrueを返す()
    {
        $this->assertTrue((new IntegerValidator('1'))->isInteger());
    }

    public function test複数の整数が含まれたの文字列が選ばれたらtrueを返す()
    {
        $this->assertTrue((new IntegerValidator('12345'))->isInteger());
    }

    public function test整数以外の文字列が選ばれたらfalseを返す()
    {
        $this->assertFalse((new IntegerValidator('a'))->isInteger());
    }

    public function test整数の中に整数以外の文字列が含まれている文字列が選ばれたらfalseを返す()
    {
        $this->assertFalse((new IntegerValidator('12a34'))->isInteger());
    }
}
