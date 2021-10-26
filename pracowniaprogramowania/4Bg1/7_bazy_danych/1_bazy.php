<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
<?php
  $connect = new mysqli("localhost","root","","zsk_4bg1_baza1");
  $sql = "SELECT * FROM `users`";

  $result = $connect->query($sql);
  // echo $row['name'];
  // print_r ($row);

  while ($row = $result->fetch_assoc()) {
    echo <<<ROW
      id: $row[id]
      <br>
      Imie: $row[name]
      <br>
      Nazwisko: $row[surname]
      <br>
      Data: $row[birthday]
      <hr>
  ROW;

  }

  $connect->close();
 ?>
  </body>
</html>
