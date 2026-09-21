<?php
/*
  ======================================================
  TUTORIAL #4: VARIABLES & CONSTANTS
  ======================================================
  - Variables start with a dollar sign: $
  - Must start with a letter or underscore, no spaces or special chars.
  - Variables can be overridden at any point.
  - Constants are defined using: define('NAME', 'value')
  - Constants cannot be redefined or changed throughout the script.
*/
define('NAME', 'Mario');

$name = 'Yoshi';
$age = 30;

// $name = 'Mario';
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div><?php echo $name; ?></div>
    <div><?php echo $age; ?></div>
    <div><?php echo NAME; ?></div>
</body>
</html>
