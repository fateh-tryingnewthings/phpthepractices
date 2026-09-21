<?php
/*
  ======================================================
  TUTORIAL #10: BOOLEANS & COMPARISON OPERATORS
  ======================================================
  - true prints as "1" in the browser.
  - false prints as empty string "" in the browser.
  - Comparison operators: <, >, <=, >=, ==, !=, ===, !==
  - Strings are compared alphabetically (uppercase < lowercase in ASCII).
  - Loose comparison (==) compares values only (performs type coercion).
  - Strict comparison (===) compares both value and data type.
*/

// Comparisons booleans (true or false)
// echo true;  // '1'
// echo false; // ''

// Numbers comparisons
// echo 5 < 10;
// echo 5 > 10;
// echo 5 == 10;
// echo 10 == 10;
// echo 5 != 10;
// echo 5 <= 5;
// echo 5 >= 5;

// Strings comparisons
// echo 'shaun' < 'yoshi'; // true (s comes before y)
// echo 'shaun' > 'yoshi'; // false
// echo 'shaun' > 'Shaun'; // true (lowercase 's' has higher ASCII value than uppercase 'S')
// echo 'mario' == 'mario'; // true
// echo 'mario' == 'Mario'; // false

// Loose vs Strict comparisons
// echo 5 == '5';    // true (values are the same)
// echo 5 === '5';   // false (one is int, one is string)
// echo 5 === 5;     // true (same value and same type)

// echo true == "1"; // true
echo false == "";    // true
?>
