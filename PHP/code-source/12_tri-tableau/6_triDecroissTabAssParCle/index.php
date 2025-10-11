<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tri décroissant tableau associatif par clé</title>
</head>
<body>

<?php
// création tableau
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// trier et afficher
krsort($age);
print_r($age);
?>

</body>
</html>