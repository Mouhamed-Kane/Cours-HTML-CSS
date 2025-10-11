<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En utilisant le tableau ci-dessous, afficher seulement les pays 
    qui ont une population supérieure ou égale à 20 millions d'habitants -->

    <?php
        $pays_population = array(
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
        );
        
        echo 'Les pays suivant ont une population de plus de 20M d\'habitant :"<br>"';
        foreach($pays_population as $pays => $population){
            if ($population >= 20000000){
                echo $pays ."<br>";   
            }
        }
        
       
    ?>
</body>
</html>