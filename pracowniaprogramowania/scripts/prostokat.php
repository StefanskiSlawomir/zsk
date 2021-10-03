<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
      <h3>Prostokąt<h3>
      <form method="get">
          <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
          <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
          <input type="submit" name ="button" value="Oblicz">
      </form>
      <?php
      if (!empty($_GET['sideA']) && ($_GET['sideB'])){
        $sideA=str_replace(',', '.', $_GET['sideA']);
        $sideB=str_replace(',', '.', $_GET['sideB']);
        $p = $sideA*$sideB;
        echo <<<RESULT
        Pole prostokąta wynosi $p cm <sup>2</sup>
        RESULT;
        $o = 2*$sideA+2*$sideB;
        echo <<< RESULT
        Obwód prostokąta wynosi $o cm
        RESULT;
      }else {
        echo "Wypełnij wszystkie pola!";
      } ?>
  </body>
</html>
