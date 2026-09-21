<?php
/*
  ======================================================
  TUTORIAL #6: NUMBERS & ARITHMETIC
  ======================================================
  - Integers (whole numbers) & Floats/Doubles (decimals).
  - Operators: +, -, *, /, ** (power), % (modulus/remainder).
  - Order of operations: BIDMAS (Brackets, Indices, Division, Multiplication, Addition, Subtraction).
  - Increment / Decrement: ++, --
  - Shorthand operators: +=, -=, *=, /=
  - Built-in math functions: floor(), ceil(), pi().
*/

$radius = 25;
$pi = 3.14;

// Basic operators: *, /, +, -, **
// echo $pi * $radius ** 2;

// Order of operation ( B I D M A S )
// B - Brackets: Solve things inside parentheses ( ) first.
// I - Indices: Solve powers, exponents, or square roots next.
// D & M - Division and Multiplication: Do these next, going from left to right.
// A & S - Addition and Subtraction: Do these last, going from left to right
// echo 2 * (4 + 9) / 3;

// Increment & decrement operators
$age = 20;
// $age++;
// echo $age;
// $age--;
// echo $age;

// Shorthand operators
// $age += 10;
// $age -= 5;
// $age *= 2;
// echo $age;

// Number functions
echo floor($pi); // 3
echo "<br>";
echo ceil($pi);  // 4
echo "<br>";
echo pi();       // 3.1415926535898
?>
