<?php

/*
 * Another thanks to @jaytaph for your excellent
 * example of reusable code
 */
$it = new \DirectoryIterator('.');
// Filter php files
$it2 = new \RegexIterator($it, '/\.php$/');

foreach ($it2 as $file) {
    printf("File: %s".PHP_EOL, $file->getFilename());
}
