<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mot-clé global PHP</title>
</head>
<body>

<?php
$greet = "Hello World!";
// Définir une fonction
function test(){
    global $greet;
    echo '<p>$greet l\'intérieur de la fonction est: ' . $greet . '</p>';
}
//appel fonction
test();

//le programme principal
echo '<p>$greet l\'extérieur de la fonction est: ' . $greet . '</p>';
 
// Attribuer une nouvelle valeur à une variable
$greet = "Goodbye";

//appel fonction
test();
//le programme principal
echo '<p>$greet à l\'extérieur de la fonction est: ' . $greet . '</p>';
?>

</body>
</html>