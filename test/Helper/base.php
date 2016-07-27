<?php

class Test_Base extends PHPUnit_Framework_TestCase
{
    const FILE_PATH = 'logs/answer.txt';

    protected function setUp()
    {
        $this->delete_file();
    }

    protected function tearDown()
    {
        $this->delete_file();
    }

    private function delete_file()
    {
        if(file_exists(self::FILE_PATH)){
            unlink(self::FILE_PATH);
        }
    }
}
