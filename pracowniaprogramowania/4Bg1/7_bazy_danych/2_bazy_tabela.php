<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>

    <h4>Użytkownicy</h4>
<?php
    $connect = new mysqli("localhost", "root", "", "zsk_4bg1_baza1");
    $sql = "SELECT `users`.*, `cities`.`city` as `miasto` FROM `users` LEFT JOIN `cities` ON `users`.`cityid` = `cities`.`id`;";

    $result = $connect->query($sql);

    //$row1 = $result->fetch_assoc();

    //echo $row1['name'];
    //echo "<br>";

    /*echo "<pre>";
    print_r($row1);
    echo "</pre>";
    echo "<br>";*/

    echo <<< TABLE
      <table>
        <tr>
          <th>Id</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Miasto</th>
        </tr>
    TABLE;

    while ($row2 = $result->fetch_assoc()) {
      echo <<< ROW
        <tr>
          <td>$row2[id]</td>
          <td>$row2[name]</td>
          <td>$row2[surname]</td>
          <td>$row2[birthday]</td>
          <td>$row2[miasto]</td>
        </tr>
      ROW;
    }

    echo <<< TABLE
      </table>
    TABLE;

    $connect->close();
?>
  </body>
</html>
