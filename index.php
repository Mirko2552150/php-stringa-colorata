
<?php
  // stampare stringa verde se la var PASS passata in GET = Boolean,
  // altrimenti stampare stringa rossa

  $input = $_GET['password'];

  if ($input == 'Boolean') {
    echo "<p style='color:green;'> PUOI ACCEDERE </p>";

  } else {
    echo "<p style='color:red;'> NON PUOI ACCEDERE </p>";
  }

?>
