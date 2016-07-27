<?php

class File
{
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function write($answer)
    {
        $fp = fopen($this->filename, "a");
        fwrite($fp, $answer . "\n");
        fclose($fp);
    }

    public function read()
    {
        $body = [];
        $fp = fopen($this->filename, "r");
        while($line = fgets($fp)){
           $body[] = trim($line);
        }
        fclose($fp);
        return $body;
    }
}
