<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>

<?php
if (isset($_GET['home'])) {
  echo "WItaj ponownie na stronie!";
}
if (!isset ($_POST['person']) && !isset($_POST['buttonAvg'])) {
  echo <<< FORMCOUNTPERSON
  <h3>Ilośc osób w rodzinie</h3>
  <form method="post">
  <input type="number" name="person" placeholder="Ilośc osób"><br><br>
  <input type="submit" value="Zatwierdź">
  </form>
  FORMCOUNTPERSON;
}
if (!empty($_POST['person'])) {
  echo "<h3>Ilośc osób w rodzinie: $_POST[person]</h3>";
  echo <<< FORMCOUNTPERSON
  <form method="post">
  FORMCOUNTPERSON;
  for ($i=1; $i <= $_POST['person']; $i++) {
    echo"<input type='number' name='person$i' placeholder='Wiek osoby $i' ><br><br>";
  }
  echo <<<FORMCOUNTPERSON
  <input type="submit" name="buttonAvg" value="Zatwierdź">
  </form>
  FORMCOUNTPERSON;
}
if (isset($_POST['buttonAvg'])) {
  echo "<h3>Sredni wiek</h3>";
  // print_r($_POST);
  $avg=0;
  $count=0;
  foreach ($_POST as $key => $value) {
    // echo "$key : $value<br>";
    if ($key != 'buttonAvg') {
        $avg+=$value;
        $count++;
    }

  }
  echo "Średni wiek wynosi: ".number_format($avg/$count,2). " lat";
}

echo '<hr><a href="./4_3_form_ageavg.php?home=">Strona główna</a>'
 ?>



  </body>
</html>
