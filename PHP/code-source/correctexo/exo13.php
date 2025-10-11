<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En utilisant la fonction rand(), remplir un tableau avec 10 nombres 
    aléatoires. Puis,tester si le chiffre 42 est dans le tableau et 
    afficher un message en conséquence. 
    Enfin, afficher le contenu de votre tableau avec var_dump -->

    <?php
        
        //Creer un tableau vide
        $tableau = array();
        // En utilisant la fonction rand(), remplir un tableau avec 10 nombres 
        //aléatoires
        $i = 0;
        while($i < 10) {
           $tableau[] = rand(0, 50);
           $i++;	  
        }
     
        // in_array vérifie si une valeur se trouve dans un array
        if(in_array(42, $tableau))
           echo 'Le nombre 42 est bien dans le tableau.';
        else
           echo 'Le tableau ne contient pas la valeur 42.';
        echo '<br />';  
        var_dump($tableau);

        
    ?>
</body>
</html>