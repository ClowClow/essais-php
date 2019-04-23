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

<h3>Question 1 : Afficher le plus petit entre A et B;</h3><br/>
  <?php
  $A = 20;
  $B = 12;
echo min($B, $A);
  ?>
<br/><br/>
<h3>Question 2 : Afficher le plus petit entre A, B et C;</h3><br/>
<?php
$A = 30;
$B = 0;
$C = -3;
echo min($A, $B, $C);
?>
<br/><br/>
<h3>Question 3 : Afficher un nombre aléatoire entre 1 et 100;</h3><br/>
<?php
$min = 1;
$max = 100;
echo rand($min, $max);
?>
<br/><br/>
<h3>Question 4 : Afficher un nombre aléatoire entre 5 et 100;</h3><br/>
<?php
$min = 5;
$max = 100;
echo rand($min, $max);
?>
<br/><br/>
<h3>Question 5 : Faire une fonction addition;</h3><br/>
<?php
function addition() {
  $A = 1;
  $B = 26;
  echo ($A + $B);
}
echo addition();
?>
<br/><br/>
<h3>Question 6 : Faire une fonction PGCD;</h3><br/>
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
<h3>Question 7 : Afficher "Je vais faire du bon visuel" si x<50 sinon "Je suis un piou piou"</h3><br/>
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
<h3>Question 8 : Afficher 30 fois "petite perruche" + numéro</h3><br/>
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
<h3>Question 9 : Afficher "petite perruche" + numéro tant que x
(nombre aléatoire entre 10 et 100) <50</h3><br/>
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
<h3>Question 10 : Faire une fonction qui prend en paramètre x;<br/>
si x == 1 alors afficher (AAAA)</br>
si x == 2 alors afficher (BBBB)</br>
si x == 3 alors afficher (CCCC)</br>
si x == 4 alors afficher (DDDD)</br>
sinon afficher "je suis une perruche"</h3><br/>
<?php
$x = -2;
if ($x == 1){
  echo "AAAA";
}
elseif ($x == 2){
  echo "BBBB";
}
elseif ($x == 3){
  echo "CCCC";
}
elseif ($x == 4){
  echo "DDDD";
}
else {
  echo "je suis une perruche";
}
?>
<br/><br/>
<h3>Question 11 : Faire la question 10 avec switch case</h3><br/>
<?php
$x = 2;

switch($x)
{
 case 1:
  echo'AAAA';
  break;

 case 2:
  echo'BBBB';
  break;

 case 3:
  echo'CCCC';
  break;

 case 4:
  echo'DDDD';
  break;

 default :
  echo 'je suis une perruche' ;
  break;
}
?>
<br/><br/>
</body>

</html>
