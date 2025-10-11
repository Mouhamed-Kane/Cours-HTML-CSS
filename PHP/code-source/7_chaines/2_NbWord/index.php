<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PHP nombre de mot d'une chaine</title>
</head>
<body>

<?php
$my_str = 'Bienvenue. Nous sommes ISI F-PT';
$my_str2 = "Bienvenue chez nous !";
 
// Calculer et afficher le nombre de caractères
echo str_word_count($my_str);
echo "<br>";
// Calculer et afficher le nombre de mots
echo str_word_count($my_str2);
?>

</body>
</html>