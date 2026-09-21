<?php

  // VIDEO #13: FUNCTIONS
  // Reusable blocks of code that can take parameters and return values.

  // Function with default arguments
  function sayHello($name = 'Shaun', $time = 'morning'){
    echo "Good $time, $name!<br />";
  }

  sayHello('Mario', 'afternoon');
  sayHello(); // Uses default parameters

  // Function that returns a value
  function formatProduct($product){
    return "{$product['name']} costs \${$product['price']} to buy.<br />";
  }

  $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
  echo $formatted;

?>
