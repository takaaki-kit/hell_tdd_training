<?php

class File
{
    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public function write($answer)
    {
        $fp = fopen($this->filepath, "a");
        fwrite($fp, $answer . "\n");
        fclose($fp);
    }

    public function read()
    {
        $body = [];
        if(!file_exists($this->filepath)){
            return $body;
        }
        $fp = fopen($this->filepath, "r");
        while($line = fgets($fp)){
           $body[] = trim($line);
        }
        fclose($fp);
        return $body;
    }
}
