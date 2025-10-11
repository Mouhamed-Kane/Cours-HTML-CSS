<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PHP Opérateurs d'affectation</title>
</head>
<body>

<?php
$x = 10;
//echo $x; //10
echo "<br>";

$x = 20;
$x += 30; //$x = $x+30 ($x=20+30=50)
echo $x; // 50
echo "<br>";
 
$x = 50;
$x -= 20; //$x = $x - 20 (50-20=30)
echo $x;  //30
echo "<br>";
 
$x = 5;
$x *= 25;  //$x = $x * 25 (5*25)
echo $x;
echo "<br>";
 
$x = 50;  
$x /= 10;  //$x = $x / 10 (50/10)
echo $x;
echo "<br>";
 
$x = 100;
$x %= 15; //$x = $x % 15 (100%15)
echo $x;
?>

</body>
</html>