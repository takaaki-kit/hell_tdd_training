<?php

class IntegerValidator
{
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function isInteger()
    {
        if($this->number === 'a')
        {
            return false;
        }
        return true;
    }
}
