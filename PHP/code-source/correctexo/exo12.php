<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Déclarer une variable de type array qui stocke les informations 
    suivantes :
         France : Paris
         Allemagne : Berlin
         Italie : Rome
    Afficher les valeurs de tous les éléments du tableau en utilisant 
    la boucle foreach. -->

    <?php
        $ville = array(
            "France"=>"Paris",
            "Allemagne"=>"Berlin",
            "Italie"=>"Rome"
        );
        foreach ($ville as $affiche){
            echo $affiche ."<br>";
        }
    ?>
</body>
</html>