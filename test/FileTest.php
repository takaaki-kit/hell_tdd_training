<?php

require_once('File.php');
require_once('Helper/base.php');

class FileTest extends Test_Base
{
    public function testファイルの中身をすべて返す()
    {
        $file = new File(self::FILE_PATH);
        $file->write('aho');
        $file->write('boke');

        $this->assertEquals(['aho', 'boke'], $file->read());
    }

    public function testファイルが存在しない時は何も出力しないこと()
    {
        $file = new File(self::FILE_PATH);

        $this->assertEquals([], $file->read());
    }
}
