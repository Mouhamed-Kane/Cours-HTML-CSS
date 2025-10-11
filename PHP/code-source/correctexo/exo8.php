<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Déclarer une variable $heure qui contient la valeur de type integer 
    de votre choix compris entre 0 et 24. 
    Créer une condition qui affiche un message si l'heure est le matin,
    l'après-midi ou la nuit. -->

    <?php
        $heure = 16;
        if($heure < 0 || $heure > 23){
            echo "Cette heure n'existe pas";
        } elseif ($heure < 12) {
            echo 'Matin';
        } elseif ($heure < 19){
            echo "Après midi";
        } else {
            echo 'Le soir';
        }
    ?>
</body>
</html>