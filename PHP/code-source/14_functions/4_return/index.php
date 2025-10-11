<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fonction PHP retournant des valeurs</title>
</head>
<body>

<?php
// Définition de la fonction
function getSum($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
// Impression de la valeur retournée
echo getSum(5, 10); // Sorties: 15
?>

</body>
</html>