<?php

  // VIDEO #12: CONTINUE & BREAK
  // continue: skips the rest of the current loop iteration and moves to the next.
  // break: terminates the loop entirely.

  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
  ];

  echo '<h3>Testing Continue (skip gold coin):</h3>';
  foreach($products as $product){
    if($product['name'] === 'gold coin'){
      continue; // Skips printing gold coin
    }
    echo $product['name'] . '<br />';
  }

  echo '<h3>Testing Break (stop at lightning bolt):</h3>';
  foreach($products as $product){
    if($product['name'] === 'lightning bolt'){
      break; // Stops the loop entirely
    }
    echo $product['name'] . '<br />';
  }

?>
