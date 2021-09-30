<?php
echo "ZSK<br>";
echo "ZSK";

$name="Janusz<br>";

//zle echo 'Twoje imię: $name';

 echo "<br>Twoje imię: $name";

 $x='x';
 $y='y';


//Konkatenacja to .

 echo $x.$y;

 //typy danych
 //logiczny
 $prawda=true;
 $fałsz=false;

 echo $prawda;//1
 echo$fałsz; //nic nie wyswietla

 //całkowity
$calkowita=10;
$bin=0b1011; //11
$oct=011;
$hex=0x11;
echo"<br>$bin";
echo"<br>$oct";
echo"<br>$hex";
echo "<br>";
//zmiennoprzecinkowe
$x=10.5;

echo gettype($x);//dobule
echo gettype($bin);
echo gettype($prawda);
echo "<br>";
//heredoc (Do stringow)
$surname="Nowak";
echo <<< E
  Imię i nazwisko:
  Janusz $surname<hr>
  Poznań
E;
$text= <<< E
  Imię i nazwisko:
  Janusz $surname<hr>
  Poznań
E;
echo $text;
 ?>
