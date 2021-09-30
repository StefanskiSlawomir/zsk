<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form  method="get">
      <input type="text" name="sideA" placeholder="Podaj dlugosc boku a"><br><br>
      <input type="submit" name="button" value="Oblicz">

    </form>
    <?php if (!empty($_GET['sideA']) && isnumeric($_GET['sideA'])) {
    $sideA=$_GET['sideA'];
    //lub $sideA=str_replace (',' '.', $get['sideA']);
    //pole
    $area=$sideA**2;
    //obwod
    $circuit=4*sideA;
    echo <<< Result
Pole kwadratu wynosi $area cm <sup>2</sup><br>
obwód kwadratu wynosi $circuit cm <br>
Result;
  }else{
      echo "Wypełnij wszystkie pola!";
    } ?>
  </body>
</html>
