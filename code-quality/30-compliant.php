<?php

/*
 * Task: Build an iterator that goes
 *       from 0 to 10 and prints out
 *       the value of the NEXT
 *       iterator
 */

for ($i = 0; $i < 10; $i++) {
    printf('Next value: %d'.PHP_EOL, ($i + 1));
}
