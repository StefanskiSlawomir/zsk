<?php
echo ("<pre>");
  print_r ($_POST);
echo ("</pre>");
if (!empty ($_POST['name']) && !empty($_POST['geometricFigure'])) {
switch ($_POST['geometricFigure']) {
  case 'kwadrat':
    header('location: ./kwadrat.php');
    break;
    case 'prostokąt':
    echo 'prostokąt';
}
}else {
?>
<script>
  history.back();
</script>
<?php
}
 ?>
