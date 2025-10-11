<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Opérateurs de comparaison en PHP</title>
</head>
<body>

<?php
$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z); //true
echo "<br>";

var_dump($x === $z); //false
echo "<br>";

var_dump($x != $y); // true
echo "<br>";

var_dump($x !== $z); // true
echo "<br>";

var_dump($x < $y); // true
echo "<br>";

var_dump($x > $y); //false
echo "<br>";

var_dump($x <= $y); //true
echo "<br>";

var_dump($x >= $y); //false
?>

</body>
</html>