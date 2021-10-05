<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>

<?php
if (!isset ($_POST['person'])) {
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
  <input type="submit" value="Zatwierdź">
  </form>
  FORMCOUNTPERSON;
}

 ?>
  </body>
</html>
