<?php

$fileData = '';
for ($i = 0; $i < 100; $i++) {
    $fileData .= sprintf('Current value: %d'.PHP_EOL, $i);
}

file_put_contents('test.txt', $fileData);
unset($fileData);
