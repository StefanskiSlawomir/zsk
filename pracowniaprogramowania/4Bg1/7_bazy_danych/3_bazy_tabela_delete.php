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
      require_once './skrypty/connect.php';
      $sql = "SELECT `users`.*, `cities`.`city` FROM `users` LEFT JOIN `cities` ON `users`.`cityid` = `cities`.`id`;";
      $result = $connect->query($sql);
    //  echo $row['name'];
    //  print_r($row);
    //if (isset($_GET['deleteUser'])) {
    //  echo "Usunięto użytkownika o id: $_GET['deleteUser']";
    //}
    echo <<< TABLE
      <table>
        <tr>
          <th>id</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Miasto</th>
        </tr>
    TABLE;
    while ($row = $result->fetch_assoc()) {
      echo <<< ROW
        <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td>$row[city]</td>
          <td><a href="./skrypty/delete.php?id=$row[id]">Usuń</a></td>
        </tr>
      ROW;
    }
    echo "</table>";
      $connect->close();
      ?>
  </body>
</html>
