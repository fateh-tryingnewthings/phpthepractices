<?php
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
