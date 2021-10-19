<?php
  function show(){
    echo"SHOW<br>";
  }
  function show1($name){
    return $name;
  }
  function stringvalidate($name, $len){
    return substr(ucfirst(strtolower(trim($name))), 0, $len);
  }
 ?>
