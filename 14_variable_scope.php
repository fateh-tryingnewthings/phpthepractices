<?php

  // VIDEO #14: VARIABLE SCOPE
  // Variables defined outside functions have global scope (not accessible inside functions by default).
  // Variables defined inside functions have local scope.

  $name = 'Mario';

  function sayHello(){
    // global $name; // Makes the global variable accessible inside
    $name = 'Yoshi'; // Local variable, does not overwrite global $name
    echo "Hello $name<br />";
  }

  sayHello(); // Outputs: Hello Yoshi
  echo $name . '<br />'; // Outputs: Mario

  // Passing by reference (using &)
  function sayBye(&$name){
    $name = 'Bowser'; // Modifies the original variable
    echo "Bye $name<br />";
  }

  sayBye($name);
  echo $name . '<br />'; // Outputs: Bowser

?>
