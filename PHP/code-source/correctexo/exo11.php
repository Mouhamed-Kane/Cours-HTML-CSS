<!-- Déclarer une variable avec le nom de votre choix et avec la valeur 0.
Tant que cette variable n'atteint pas 20, il faut :
 l'afficher ;
 incrémenter sa valeur de 2 ;
Si la valeur de la variable est égale à 10, 
la mettre en valeur avec la balise HTML appropriée. -->

    <?php
        $nombre = 0;
        while($nombre <= 20){      
            if($nombre == 10){
                echo "<b>" . $nombre . "</b> <br>";
            } else {
                echo $nombre . "<br>";
            }
            $nombre += 2;
        }
    ?>