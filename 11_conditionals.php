<?php

  // VIDEO #11: CONDITIONAL STATEMENTS
  // Used to execute different blocks of code based on conditions.

  $price = 20;

  // Basic if, elseif, else
  if ($price < 10) {
    echo 'The condition is met: price is cheap<br />';
  } elseif ($price < 30) {
    echo 'The condition is met: price is reasonable<br />';
  } else {
    echo 'The condition is met: price is expensive<br />';
  }

  // Comparison in arrays & logical operators (&&, ||)
  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
  ];

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Conditionals</title>
</head>
<body>
  <div>
    <h2>Product Price Filter</h2>
    <ul>
      <?php foreach($products as $product){ ?>
        <!-- Show products with price > 15 -->
        <?php if($product['price'] > 15){ ?>
          <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
</body>
</html>
