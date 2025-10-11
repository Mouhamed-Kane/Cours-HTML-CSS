<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tableau associatif en PHP</title>
</head>
<body>

<?php
$ages["Nom"] = "Peter";
$ages["Age"] = 32;
$ages["Ville"] = "Thiès";

// Afficher la structure du tableau
print_r($ages); 
echo '<br>';
var_dump($ages);
echo '<br>';
echo 'Bonjour ' . $ages["Nom"] . ' vous avez '. $ages["Age"] . ' ans et vous habitez à '. $ages["Ville"];
?>

</body>
</html>