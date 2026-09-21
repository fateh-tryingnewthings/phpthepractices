<?php
/*
  ======================================================
  TUTORIAL #8: MULTIDIMENSIONAL ARRAYS
  ======================================================
  - Arrays containing nested arrays.
  - Accessed via multiple index/key accessors: $array[0]['title'].
  - array_pop() removes and returns the last element.
*/

$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

// print_r($blogs);
// print_r($blogs[1]);
// echo $blogs[1]['title'];
// echo count($blogs);

// Adding a new nested array element
$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
// print_r($blogs);

// Removing the last item
$popped = array_pop($blogs);
// print_r($popped);
print_r($blogs);
?>
