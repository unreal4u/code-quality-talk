<?php

if (is_writable('test.txt')) {
    unlink('test.txt');
}

for ($i = 1; $i <= 100; $i++) {
    if (isset($i) && !empty($i) && is_numeric($i) && is_int($i)) {
        file_put_contents('test.txt', 'Current value: '.$i.PHP_EOL, FILE_APPEND);
    }
}
