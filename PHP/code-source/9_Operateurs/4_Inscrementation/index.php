<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Opérateurs d'incrémentation et de décrémentation en PHP</title>
</head>
<body>

<?php
$x = 10;
echo ++$x; // 1 + 10 = 11
echo "<br>";
echo $x++; // 10 + 1 = 11
echo "<br>";
echo $x; // 12
echo "<hr>";



$x = 10;
echo $x++;  // (10 + 1)
echo "<br>";
echo $x; // 11
echo "<hr>";

$x = 10;
echo --$x; // 
echo "<br>";
echo $x;  //9
echo "<hr>";

$x = 10;
echo $x--;  //10 - 1
echo "<br>";
echo $x;   //9
?>

</body>
</html>