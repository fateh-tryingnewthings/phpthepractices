<?php
/*
  ======================================================
  TUTORIAL #9: LOOPS (FOR, WHILE, FOREACH)
  ======================================================
  - for loop: count-controlled iteration.
  - while loop: condition-controlled iteration.
  - foreach loop: specifically iterates over array items.
  - Embedding loops in HTML templates using alternate syntax or standard brackets.
*/

$ninjas = ['shaun', 'ryu', 'yoshi', 'mario'];

// For Loop
// for($i = 0; $i < count($ninjas); $i++){
//     echo $ninjas[$i] . '<br />';
// }

// Foreach Loop
// foreach($ninjas as $ninja){
//     echo $ninja . '<br />';
// }

// While Loop
// $i = 0;
// while($i < count($ninjas)){
//     echo $ninjas[$i] . '<br />';
//     $i++;
// }

$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>Blogs</h1>
    <ul>
        <?php foreach($blogs as $blog){ ?>
            <h3><?php echo $blog['title']; ?></h3>
            <p><?php echo $blog['author']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>
