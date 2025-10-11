<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Déclarer une variable $age qui contient la valeur de type integer 
    de votre choix. Réaliser une condition pour afficher si la 
    personne est mineure ou majeure.
    Utiliser l’opérateur ternaire si possible. -->

    <?php 
        $age = 10;
        echo ($age >= 18) ? 'majeur' : 'mineur';
    ?>
</body>
</html>