<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portée de variable</title>
</head>
<body>
<?php
// Définir la fonction
function test(){
    $greet = "Hello World!";
    echo $greet;
}
test(); // Sorties: Hello World!
echo $greet; // Générer une erreur de variable non définie

?>
</body>
</html>