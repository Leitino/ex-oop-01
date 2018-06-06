<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    require 'scarpa.php';
    require 'scarpa_calcio.php';
    require 'scarpa_calcetto.php';


    $scarpa1 = new scarpa();
    $scarpa1 -> marca = 'nike';
    $scarpa1 -> colore = 'bianco';
    $scarpa1 -> numero = 41;
    $scarpa1 -> sezione = 'a';
    $scarpa1 -> materiale = 'gomma';
    $scarpa1 -> prezzo = 70;
    var_dump($scarpa1);
    var_dump($scarpa1 -> isSezioneBambino());
    echo ($scarpa1 -> datiScarpa());


    $scarpaCalcio1 = new scarpa_calcio();
    $scarpaCalcio1 -> marca = 'adidas';
    $scarpaCalcio1 -> colore ='blu';
    $scarpaCalcio1 -> numero ='30';
    $scarpaCalcio1 -> sezione = 'b';
    $scarpaCalcio1 -> materiale = 'cuoio';
    $scarpaCalcio1 -> prezzo = 40 ;
    $scarpaCalcio1 -> numTacchetti = 12;
    $scarpaCalcio1 -> materialeTacchetti = 'ferro';
    var_dump($scarpaCalcio1 -> isSezioneBambino());
    echo ($scarpaCalcio1 -> datiScarpa());

    $scarpaCalcetto1 = new scarpa_calcetto();
    $scarpaCalcetto1 -> marca = 'puma';
    $scarpaCalcetto1 -> colore = 'nero';
    $scarpaCalcetto1 -> numero = 41;
    $scarpaCalcetto1 -> sezione = 'a';
    $scarpaCalcetto1 -> materiale = 'cuoio';
    $scarpaCalcetto1 -> prezzo = 60;
    $scarpaCalcetto1 -> tipoSuola = 'liscia';
    var_dump($scarpaCalcetto1 -> isSezioneBambino());
    var_dump($scarpaCalcetto1 -> isForParquet());
    echo ($scarpaCalcetto1 -> datiScarpa());


    ?>



  </body>
</html>
