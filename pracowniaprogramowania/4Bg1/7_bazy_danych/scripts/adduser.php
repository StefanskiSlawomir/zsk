<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      if(empty($value)) {
        header("location: ../5_bazy_tabela_insert_update.php?error=2&info=Wypełnij wszystkie pola w formularzu!&addUser=");
        // header("location: ../4_bazy_tabela_insert.php?error=2&info=Wypełnij wszystkie pola w formularzu!&addUser=");
        exit();
      }
    }
    require_once './connect.php';
    $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]');";
    $connect->query($sql);
    if ($connect->affected_rows == 1) {
      header("location: ../5_bazy_tabela_insert_update.php?error=2&info=Prawidłowo dodano użytkownika!");
      // header("location: ../4_bazy_tabela_insert.php?error=2&info=Prawidłowo dodano użytkownika!");
    }
    else {
      header("location: ../5_bazy_tabela_insert_update.php?error=2&info=Nie dodano użytkownika!&addUser=");
      // header("location: ../4_bazy_tabela_insert.php?error=2&info=Nie dodano użytkownika!&addUser=");
    }
    $connect->close();
  }
  else{
    header("location: ../5_bazy_tabela_insert_update.php?error=2&info=Wypełnij wszystkie dane!&addUser=");
    // header("location: ../4_bazy_tabela_insert.php?error=2&info=Wypełnij wszystkie dane!&addUser=");
  }
?>
