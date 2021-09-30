<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokat</title>
  </head>
  <body>
    <h3>Prostokat</h3>
    <form  method="get">
      <input type="text" name="sideA" placeholder="Podaj dlugosc boku a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj dlugosc boku b"><br><br>
      <input type="submit" name="button" value="Oblicz">

    </form>
    <?php if ((!empty($_GET['sideA']) && (!empty($_GET['sideB'] ))) {
    $sideA=$_GET['sideA'];
    $sideB=$_GET['sideB'];
    $sideA=str_replace (',' '.', $get['sideA']);
    $sideB=str_replace (',' '.', $get['sideB']);
    //pole
    $area=$sideA*$sideB;
    //obwod
    $circuit=2*sideA+2*sideB;
    echo <<< Result
Pole prostokata wynosi $area cm <sup>2</sup><br>
obwód prostokata wynosi $circuit cm <br>
    Result;
  }else if (isset$_GET['button']){
      echo "Wypełnij wszystkie pola!";
    } ?>
  </body>
</html>
