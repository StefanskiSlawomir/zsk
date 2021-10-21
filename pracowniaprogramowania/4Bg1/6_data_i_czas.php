<?php
//date()
echo "dzien-miesiac-rok:  ".date('d-m-Y').'<br>';
echo "mieciac-dzien-rok  ".date('M-d-y').'<br>';
echo "dzien-miesiac-rok  ".date('d-m-y').'<br>';
echo "dzien-miesiac-rok  ".date('d-F-y').'<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'),'<br>';


echo date('G:i:s'),'<br>';
echo date('G:i:sa'),'<br>';
echo date('H:i:s'),'<hr>';

 ?>

 <script>
   setTimeout(function(){
     //window.location.reload();
   },1000)
 </script>
<?php
//getdate()
$date=getdate();
//echo $date;//warning
echo "<pre>";
print_r($date);
echo "</pre>";

echo $date['wday'],'<br>';
echo $date['yday'],'<br>';
echo $date['0'],'<br>';
//rok przestepny
echo date('L'),'<hr>'; //0-rok nie jest przestepny

// mktime()
$today= mktime(0,0,0,10,21,2021);
$today= mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today,'<br>';//1634767200

//ile lat minelo od 1stycznia 1970

$year =$today/(60*60*24*365);
echo (int)$year, "<br>";

//poprzedni rok
$lastYear= mktime(0,0,0,date('m'),date('d'),date('Y')-1);
$year =$lastYear/(60*60*24*365);
echo (int)$year, "<hr>"



 ?>
