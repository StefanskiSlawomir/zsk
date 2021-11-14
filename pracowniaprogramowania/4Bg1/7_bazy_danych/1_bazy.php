<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>

    <h4>Użytkownicy</h4>
<?php
    $connect = new mysqli("localhost", "root", "", "zsk_4bg1_baza1");
    $sql = "SELECT * FROM `users`;";

    $result = $connect->query($sql);

    //$row1 = $result->fetch_assoc();

    //echo $row1['name'];
    //echo "<br>";

    /*echo "<pre>";
    print_r($row1);
    echo "</pre>";
    echo "<br>";*/

    while ($row2 = $result->fetch_assoc()) {
      echo <<< ROW
        ID: $row2[id]
        <br>
        Imię: $row2[name]
        <br>
        Nazwisko: $row2[surname]
        <br>
        Data urodzenia: $row2[birthday]
        <hr>
      ROW;
    }

    $connect->close();
?>
  </body>
</html>
