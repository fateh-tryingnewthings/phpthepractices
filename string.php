<?php
/*
  ======================================================
  TUTORIAL #5: STRINGS & STRING FUNCTIONS
  ======================================================
  - String concatenation uses the dot operator (.)
  - Single quotes ('') output literal text.
  - Double quotes ("") allow variable interpolation (e.g., "$name").
  - Escape characters using backslash (\).
  - Built-in functions: strlen(), strtoupper(), strtolower(), str_replace().
*/

$stringOne = 'my email is ';
$stringTwo = 'mario123@thenetninja.co.uk';
echo $stringOne . $stringTwo;
$name = 'mario';
echo 'Hey, my name is ' . $name;
echo "Hey, my name is $name";

echo "the ninja screamed \"whaaa\"";
echo 'the ninja screamed "whaaa"';
echo 'the ninja screamed \'whaaa\'';

echo $name[0]; // outputs 'm'
echo $name[1]; // outputs 'a'

echo strlen($name);                    // returns length: 5
echo strtoupper($name);                // MARIO
echo strtolower($name);                // mario
echo str_replace('m', 'w', $name);    // wario
?>
