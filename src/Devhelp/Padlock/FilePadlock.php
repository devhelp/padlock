<?php

namespace Devhelp\Padlock;

class FilePadlock implements PadlockInterface
{
    protected $lockFilename;
    
    public function __construct($filename)
    {
        $this->lockFilename = $filename;
    }
    
    public function isLocked()
    {
        return file_exists($this->lockFilename);
    }
    
    public function lock()
    {
        touch($this->lockFilename);
    }
    
    public function unlock()
    {
        unlink($this->lockFilename);
    }    
}
