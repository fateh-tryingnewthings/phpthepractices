<?php
/*
  ======================================================
  TUTORIAL #7: ARRAYS (INDEXED & ASSOCIATIVE)
  ======================================================
  - Indexed Arrays: Numeric keys starting at 0.
  - Associative Arrays: Key => Value pairs.
  - Array functions: count(), array_push(), array_merge(), print_r().
*/

// INDEXED ARRAYS
$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[1]; // crystal

$peopleTwo = array('ken', 'chun-li');
// echo $peopleTwo[1]; // chun-li

$ages = [20, 30, 40, 50];
// print_r($ages);

$ages[] = 60;          // 60 to the end
array_push($ages, 70); // 70 to the end
// print_r($ages);

// echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);


// 2. ASSOCIATIVE ARRAYS (Key => Value)
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['mario']; // orange
// print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
// print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink';   // Adds new key-value pair
$ninjasTwo['peach'] = 'pink';  // Overwrites existing key
// print_r($ninjasTwo);

// echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);
?>
