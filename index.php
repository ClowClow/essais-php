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
<br/><br/>
Question 2 : Afficher le plus petit entre A, B et C;<br/>
<?php
$A = 30;
$B = 0;
$C = -3;
echo min($A, $B, $C);
?>
<br/><br/>
Question 3 : Afficher un nombre aléatoire entre 1 et 100;<br/>
<?php
$min = 1;
$max = 100;
echo rand($min, $max);
?>
<br/><br/>
Question 4 : Afficher un nombre aléatoire entre 5 et 100;<br/>
<?php
$min = 5;
$max = 100;
echo rand($min, $max);
?>
<br/><br/>
Question 5 : Faire une fonction addition; </br>
<?php
function addition() {
  $A = 1;
  $B = 26;
  echo ($A + $B);
}
echo addition();
?>
<br/><br/>
Question 6 : Faire une fonction PGCD; <br/>
<?php
function pgcd($nombre,$nombre2){
   while($nombre>1){
        $reste = $nombre%$nombre2;
        if($reste == 0){
        break;
        }
        $nombre=$nombre2;
        $nombre2=$reste;
    }
return $nombre2;
}
echo pgcd( 20,30 );
?>
<br/><br/>
Question 7 : Afficher "Je vais faire du bon visuel" si x<50 sinon "Je suis un piou piou" </br>
<?php
$x = 45;
if ($x<50) {
  echo "Je vais faire du bon visuel";
}
else {
  echo "Je suis un piou piou";
}
?>
<br/><br/>
Question 8 : Afficher 30 fois "petite perruche" + numéro </br>
<?php
$x = 0;
$A = "petite perruche";
while ($x <= 30){
  echo ($x);
  echo ($A.'</br>');
  $x++;
}
?>
<br/><br/>
Question 9 : Afficher "petite perruche" + numéro tant que x
(nombre aléatoire entre 10 et 100) <50 </br>
<?php
$x = rand (10, 100);
$A = "petite perruche";
while ($x <= 50){
  echo ($x);
  echo ($A.'</br>');
  $x++;
}
?>
<br/><br/>
</body>

</html>
