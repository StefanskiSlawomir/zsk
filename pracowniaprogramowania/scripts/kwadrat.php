<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
      <h3>Kwadrat<h3>
      <form method="get">
          <input type="text" name="sideA" placeholder="Podaj długość boku a">
          <input type="submit" value="Oblicz">
      </form>
      <?php
      if (!empty($_GET['sideA'])){
        $sideA=str_replace(',','.',$_GET['sideA']);
        $p = $sideA*$sideA;
        echo <<<RESULT
        Pole kwadratu wynosi $p cm <sup>2</sup>
        RESULT;
        $o = 4*$sideA;
        echo <<< RESULT
        Obwód kwadratu wynosi $o cm
        RESULT;
      }else {
        echo "Wypełnij wszystkie pola!";
      } ?>
  </body>
</html>
