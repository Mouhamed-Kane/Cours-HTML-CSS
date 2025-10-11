<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tri croissant tableau associatif par clé</title>
</head>
<body>

<?php
// création tableau
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// trier et afficher
ksort($age);
print_r($age);
?>

</body>
</html>