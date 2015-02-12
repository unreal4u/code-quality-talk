<?php

/**
 * Checks what to print depending on output
 *
 * Prints constant ONE, TWO or another string
 * depending on the input $number
 *
 * @param int $number The number to check
 * @return boolean Returns always true
 */
function checkNumber($number)
{
    switch ($number) {
        case 1:
            echo ONE;
            break;
        case 4:
            echo TWO;
            break;
        default:
            echo 'not ONE nor TWO';
            break;
    }

    return true;
}

// Human readable representation of constants
define('ONE', 1);
define('TWO', 2);
define('FOUR', 9); // CAUTION! Due to BC this one is different!
define('FIVE', 5);

// Assign and check the number
$myNumber = FOUR;
checkNumber($myNumber);
echo PHP_EOL;
