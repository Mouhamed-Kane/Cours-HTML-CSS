<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portée de variable</title>
</head>
<body>
<?php
$greet = "Hello World!";
 
// Définir la fonction
function test(){
    echo $greet;
}
 
test();  // Générer une erreur de variable non définie
 
echo $greet; // Outputs: Hello World!
?>
</body>
</html>