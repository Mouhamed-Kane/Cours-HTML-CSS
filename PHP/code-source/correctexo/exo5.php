<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Déclarer une variable $sexe qui contient une chaîne de caractères. 
    Créer une condition qui affiche un message différent 
    en fonction de la valeur de la variable. -->

    <?php
        $sexe = 'masculin';
        if($sexe == 'masculin') {
            echo 'Je suis un homme';
        } elseif ($sexe == 'feminin') {
            echo 'Je suis une femme';
        } else {
            echo 'Sexe inconnu';
        }
    ?>
</body>
</html>