<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fonction PHP avec paramètres optionnels</title>
</head>
<body>

<?php
// Définir une fonction
function customFont($font, $size=1.5){
echo "<p style='font-family: $font; font-size: {$size}em;'>Hello, world!</p>";
}
 
// Appel de la fonction
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
?>

</body>
</html>