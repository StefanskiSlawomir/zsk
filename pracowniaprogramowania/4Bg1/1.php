<?php
  echo "ZSK<br>";
  echo "ZSK";
  $name="Janusz";
  echo '<br>Twoje imię: $name';
  echo "<br>Twoje imię: $name";
  $x='x';
  $y='y';

  //konkatenaja.
  echo $x.$y;

  //typy danych
  //logiczny
  $prawda=true;
  $fałsz=false;
  echo $prawda; //1
  echo $fałsz; //nic nie wyswietla

  //typ calkowity
  $całkowita=10;
  $bin=0b1011; //11
  $oct=011; //9
  $hex=0x11; //17

  echo "<hr>$bin";
  echo "<hr>$oct";
  echo "<hr>$hex";

  //zmiennoprzecinkowe
  $x=10.5;

  echo gettype($x); //double
  echo gettype($bin); //integer
  echo gettype($prawda)."<hr>"; //boolean

  //heredoc
  $surname="Nowak";
  echo <<< E
    Imię i nazwisko:
    Janusz $surname
    Poznań<hr>
  E;

  $tekst = <<< E
    Imię i nazwisko:
    Janusz $surname
    Poznań<hr>
  E;

  echo $tekst;
  ?>
