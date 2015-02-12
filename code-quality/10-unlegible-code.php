<?php

define('ONE',   1); // Defines ONE
define('TWO',   2); // Defines TWO
define('FOUR',  9); // Defines FOUR
define('FIVE',  5); // Defines FIVE

// Declaring a variable
$a = FOUR;
// Checking a variable
if ($a == 4) goto b; goto c;

// Print something
a:echo ONE;goto c;b:echo TWO;goto c;
c:echo 'not ONE nor TWO';
echo "\n";
