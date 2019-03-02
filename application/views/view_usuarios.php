<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2> hooooooooooolaaaaaaaa </h2><br>
    <?php
    /*$num1=99;
    $num2=112;
    $num3=20;
    $suma=$num1+$num2;
    echo "$num1 + $num2 = ".($num1+$num2);


    if (($num1 > $num2) AND ($num1>$num3) ) {
      echo "El mayor es = ". $num1;
    }elseif (($num2>$num1) AND ($num2>$num3)) {
      echo "El mayor es = ". $num2;
    }else {
      echo "EL mayor es = ". $num3 ;
    }*/

     ?>
     <form  action="<?php base_url(); ?>respuesta" method="post">
       <input type="number" name="num1">
       <input type="number" name="num2">

       <button type="submit" name="button">enviar</button>

     </form>

  </body>
</html>
