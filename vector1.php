<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>vector uno</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h2>el promedio de un estudiante  dando  7 notas  demostrando si es aprovado o no </h2>
<?php

$n = array(6,4,5,6,7,8,9);
$p=($n[0]+$n[1]+$n[2]+$n[3]+$n[4]+$n[5]+$n[6])/7;

echo "el promedio es : $p <br/>";
if ($p>6) {

  echo "<strong>es aprovado</strong>";
}
else {
  echo "<strong>no aprovado</strong>";
}
 ?>

    </div>

  </body>
</html>
