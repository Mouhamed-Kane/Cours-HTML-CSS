<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fonction PHP avec paramètres</title>
</head>
<body>

<?php
// Définir une fonction
function getSum($num1, $num2){
  //code à executer
  $sum = $num1 + $num2;
  echo "La somme des deux nombres $num1 et $num2 
  est : $sum";
  echo "<br>";
}
 
// Appel de la fonction
getSum(10, 1);
getSum(1, 12);
?>

</body>
</html>