<?php

  // VIDEO #15: INCLUDE & REQUIRE
  // include: if file is not found, produces a Warning but continues script execution.
  // require: if file is not found, produces a Fatal Error and stops script execution.

  include('ninjas.php');
  require('ninjas.php');

  // include('non_existent_file.php'); // Warning, still runs below
  // require('non_existent_file.php'); // Fatal error, script halts

  echo 'End of file reached.';

?>
