<?php

/*
 * Thanks @jaytaph for your excellent
 * example of non-reusable code
 */
$dir = opendir('.');
while (($file = readdir($dir)) !== false) {
    // Filter php files:
    if (!preg_match('/\.php$/', $file)) {
        continue;
    }

    print "File: $file\n";
}
