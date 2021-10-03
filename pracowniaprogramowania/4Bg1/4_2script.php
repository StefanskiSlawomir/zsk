<?php
echo ("<pre>");
print_r ($_POST);
echo ("</pre>");
if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])){
  switch ($_POST['geometricFigure']) {
    case 'Kwadrat':
      header('location: ../scripts/kwadrat.php');
      break;
    case 'Prostokąt':
      header('location: ../scripts/prostokat.php');
      break;
  }
}else{
  ?>
    <script>
        history.back();
    </script>
  <?php
}
?>
