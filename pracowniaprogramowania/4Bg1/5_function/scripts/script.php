<?php
  require_once '../functions/function.php';
  show();
  if (!empty($_POST['name'])) {
    echo "Imię: ".stringvalidate($_POST['name'] ,4).", długość: ".strlen(stringvalidate($_POST['name'], 4));

  }
 ?>
