<?php

require_once('File.php');


class FileTest extends PHPUnit_Framework_TestCase
{
    const FILE_PATH = 'logs/answer.txt';

    public function testファイルの中身をすべて返す()
    {
        $file = new File(self::FILE_PATH); 
        $file->write('aho');
        $file->write('boke');

        $this->assertEquals(['aho', 'boke'], $file->read());
    }

    protected function tearDown()
    {
        if(file_exists(self::FILE_PATH)){
            unlink(self::FILE_PATH);
        }
    }
}
