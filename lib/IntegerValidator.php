<?php

class IntegerValidator
{
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function isInteger()
    {
        if(preg_match("/^[0-9]+$/",$this->number))
        {
            return true;
        }
        return false;
    }
}
