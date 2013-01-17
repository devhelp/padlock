Credits
------------
Brought to you by : Devhelp.pl ( http://devhelp.pl )

Requirements
---------------
PHP 5.3 >=

Usage
----------

    $filename = 'padlock.lock';
    
    $padlock = new \Devhelp\Padlock\FilePadlock($filename);
    
    echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";
    echo "locking the padlock...\n";
    $padlock->lock();
    echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";
    echo "unlocking the padlock...\n";
    $padlock->unlock();
    echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";

Switch do 'demo' branch if you want to see the demo