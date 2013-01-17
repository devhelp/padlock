<?php

require_once __DIR__.'/autoload.php';

$filename = 'padlock.lock';

$padlock = new \Devhelp\Padlock\FilePadlock($filename);

echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";
echo "locking the padlock...\n";
$padlock->lock();
echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";
echo "unlocking the padlock...\n";
$padlock->unlock();
echo "padlock - is locked: ".($padlock->isLocked() ? 'true' : 'false')."\n";
