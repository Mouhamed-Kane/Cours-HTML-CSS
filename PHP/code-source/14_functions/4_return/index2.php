<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PHP retournant un tableau avec des fonctions</title>
</head>
<body>

<?php
// Définir une fonction
function divideNumbers($dividend, $divisor){
    $quotient = $dividend / $divisor;
    $rest = $dividend % $divisor;
    $array = array($dividend, $divisor, $quotient, $rest);
   return $array; 
}

// Assigner les variables comme s'il s'agissait d'un tableau
list($dividend, $divisor, $quotient, $rest) = divideNumbers(10, 2);
echo $dividend . "<br>";  // Sorties: 10
echo $divisor  . "<br>";   // Sorties: 2
echo $quotient . "<br>";  // Sorties: 5
echo $rest; //0
?>

</body>
</html>