<?php

if (is_writable('test.txt')) {
    unlink('test.txt');
}

for ($i = 0; $i < 100; $i++) {
    file_put_contents('test.txt', sprintf('Current value: %d'.PHP_EOL, $i), FILE_APPEND);
}
