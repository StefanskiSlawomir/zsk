<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
    // echo "$key: $value<br>";
    if (empty($value)) {
        header('location: ../4_bazy_tabela_insert.php?error=1&info=Wypełnij wszystkie dane w formularzu!&addUser=');
        exit();
    }
    }
    require_once './connect.php';
    $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]')";
    $connect->query($sql);
  if ($connect->affected_rows ==1) {
    header('location: ../4_bazy_tabela_insert.php?error=1&info=Prawidlowo dodano uzytkownika');
  }

    $connect->close();
  }
    else{
      header('location: ../4_bazy_tabela_insert.php?error=1&info=Nie dodano uzytkownika?Adduser=');
    }
 ?>
