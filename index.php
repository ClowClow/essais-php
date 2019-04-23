<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Essais PHP</title>
</head>

<body>
  <h1>Page d'essai de Php</h1>

Question 1 : Afficher le plus petit entre A et B;<br/>
  <?php
  $A = 20;
  $B = 12;
echo min($B, $A);
  ?>
<br/>
Question 2 : Afficher le plus petit entre A, B et C;<br/>
<?php
$A = 30;
$B = 0;
$C = -3;
echo min($A, $B, $C);
?>
<br/>
Question 3 : Afficher un nombre aléatoire entre 1 et 100;<br/>
<?php
$min = 1;
$max = 100;
echo rand($min, $max);
?>
<br/>
Question 4 : Afficher un nombre aléatoire entre 5 et 100;<br/>
<?php
$min = 5;
$max = 100;
echo rand($min, $max);
?>
<br/>
Question 5 : Faire une fonction addition; </br>
<?php

function addition() {
  $A = 1;
  $B = 26;
  echo ($A + $B);
}
echo addition();
?>
<br/>
</body>

</html>
