<?php

class IntegerValidatorTest extends PHPUnit_Framework_TestCase
{
    public function test整数の文字列が選ばれたらtrueを返す()
    {
        $this->assertTrue((new IntegerValidator('1'))->isInteger());
    }
}
