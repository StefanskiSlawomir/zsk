<?php
if (!empty($_GET['id'])) {
  require_once('./connect.php');
  $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
  $connect->query($sql);
  if ($connect->affected_rows) {
    //echo $connect->affected_rows;
    //header("location: ../3_bazy_tabela_delete.php?deleteUser=$_GET[id]");
    /*echo <<< ALERT
      Zmieniono: $connect->affected_rows wierszy;
      <br>
      Usunięto użytkownika o id: $_GET[id];
      <a href="../3_bazy_tabela_delete.php?deleteUser=$_GET[id]">Powrót</a>
    ALERT;*/
    // header("location: ../3_bazy_tabela_delete.php?error=0&info=Usunięto użytkownika o id: $_GET[id]");
    header("location: ..5_bazy_tabela_insert_update.php?error=0&info=Usunięto użytkownika o id: $_GET[id]");
  }
  else {
    //header("location: ../3_bazy_tabela_delete.php?error=1");
    // header("location: ../3_bazy_tabela_delete.php?error=1&info=Nie udało się usunąć rekordu");
    header("location: ../5_bazy_tabela_insert_update.php?error=1&info=Nie udało się usunąć rekordu");
  }
}
else {
  // header("location: ../3_bazy_tabela_delete.php");
  header("location: ../5_bazy_tabela_insert_update.php");
}
?>
