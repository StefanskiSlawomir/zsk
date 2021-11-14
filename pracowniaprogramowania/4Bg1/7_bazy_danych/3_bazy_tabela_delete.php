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
    require_once('./scripts/connect.php');
    $sql = "SELECT `users`.*, `cities`.`city` as `miasto` FROM `users` LEFT JOIN `cities` ON `users`.`cityid` = `cities`.`id`;";

    $result = $connect->query($sql);

    /*if (isset($_GET['deleteUser'])) {
      echo "Usunięto użytkownika o id: $_GET[deleteUser]";
    }
    else if (isset($_GET['error'])) {
      echo "Nie udało się usunąć rekordu";
    }*/
    if (isset($_GET['error'])){
      echo $_GET['info'];
    }

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
          <th>Usuwanie</th>
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
          <td><a href="./scripts/delete.php?id=$row2[id]">Usuń</a></td>
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
