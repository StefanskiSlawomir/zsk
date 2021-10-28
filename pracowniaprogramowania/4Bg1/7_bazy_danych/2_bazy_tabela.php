<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
<?php
  $connect = new mysqli("localhost","root","","zsk_4bg1_baza1");
  $sql ="SELECT `users`.*, `city`.`city`\n"

    . "FROM `users`\n"

    . "	, `city`";

  $result = $connect->query($sql);
  // echo $row['name'];
  // print_r ($row);

echo <<<TABLE
<table>
  <tr>
    <th>ID</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
  </tr>

TABLE;

  while ($row = $result->fetch_assoc()) {
    echo <<<ROW
    <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[surname]</td>
    <td>$row[city]</td>
    </tr>
  ROW;

  }
echo"</table>";
  $connect->close();
 ?>

  </body>
</html>
