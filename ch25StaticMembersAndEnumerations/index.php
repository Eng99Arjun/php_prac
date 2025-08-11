<?php
require_once __DIR__ .'/vendor/autoload.php';
use DhananjayDev\AudioClip;

print 'Max AudioClip duration so far ='
.AudioClip::getMaxClipDurationSeconds().PHP_EOL;

$clip1 = new AudioClip('Hello World', 2);
print $clip1;

print 'Max AudioClip duration so far ='
.AudioClip::getMaxClipDurationSeconds().PHP_EOL;


?>