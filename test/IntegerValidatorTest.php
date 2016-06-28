<?php

class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
    public function test整数の文字列が選ばれたらtrueを返す()
    {
        $this->assertTrue((new IntegerValidator('1'))->isInteger());
    }

    public function test整数以外の文字列が選ばれたらfalseを返す()
    {
        $this->assertFalse((new IntegerValidator('a'))->isInteger());
    }
}
