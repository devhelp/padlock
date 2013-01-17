<?php

namespace Devhelp\Padlock;

interface PadlockInterface
{
    /**
     * locks the padlock
     */
    public function lock();
    
    /**
     * unlocks the padlock
     */
    public function unlock();
    
    /**
     * checks if padlock is locked
     */
    public function isLocked();
}
