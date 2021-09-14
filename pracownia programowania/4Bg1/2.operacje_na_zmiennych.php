<?php
echo PHP_VERSION; //8.0.10
echo '<br>';
echo 2**10,"<br>"; //1024

$x=100;
$y=10;
echo $x<=>$y,('<br>'); //operator powrowniana

//rowne

$x=1;
$y=1.0;

echo gettype($x),'<br>'; //integer
//ctrl+shift+d duplikuje
echo gettype($y),'<br>'; //double

//jak sie napisze np if i kliknie enter to uzupelni szkielet

if ($x==$y) {
  echo 'Równe';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

if ($x===$y) {
  echo 'Identyczne';
  // code...
}else {
  echo 'Różne';
}
echo '<br>';

/*
  postinkrementacja $x++
  pretinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

/*
$x=10;
$x++;
echo $x; //11
$x = $x++;
echo $x; //11
$y = $x++;
echo $x; //12
echo $y;//11

$x= --$x;
echo $x;//11
echo '<hr>'
*/

//Zadanie

$x=1;
echo $x; //1
$x=$x++;
echo$x; //1
$x=++$x;
echo$x; //2
$y=++$x;
echo$x; //3
echo$y; //3
$y=$x++;
echo$x; //4
echo$y; //3



















 ?>
