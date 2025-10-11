<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <!-- Créer un tableau multidimentionnel nommé $eleve qui contient le 
    nom de 5 éléves : Ali, Mussa, Binta, Modou, Arame. Chaque éléve à
    trois notes : note1 - note2 - note3
    Afficher le message suivant :
    'Ali a une note de note1 à la première évaluation, note2 à la deuxième
    évaluation et note3 à la dernière évalution. Sa moyenne est donc
    (sommeDeNotes/NBnote)/20 ' -->
    
    <?php
    $eleve = array (
        array('Ali', 10, 17, 14),
        array('Musa', 9, 12, 10),
        array('Binta', 8,12,10),
        array('Modu', 12, 5, 8),
        array('Arame', 18,10,10)
    );
    echo $eleve[0][0] . ' a une note de '. $eleve[0][1] . 
    ' à la première évaluation ' . $eleve[0][2] . ' à la deuxième évaluation et '. $eleve[0][3] . 'à la troisième évaluation. Sa moyenne est de : ' . 
    ceil(($eleve[0][1] + $eleve[0][2] + $eleve[0][3])/3) . ' /20';














        // $eleve = array(
        //     array('Ali',12, 15, 14),
        //     array('Musa', 12, 13, 18),
        //     array('Binta', 10, 14, 10),
        //     array('Modou', 2, 13, 5),
        //     array('Arame', 7, 5, 8)
        // );

        // echo $eleve[0][0]. " a une note de ". $eleve[0][1]. " à la première évaluation, ". $eleve[0][2]. " à la deuxième
        // évaluation et ". $eleve[0][3]. " à la dernière évalution. Sa moyenne est donc ". ceil(($eleve[0][1] + $eleve[0][2] + $eleve[0][3])/3) ." /20" ;
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
</body>
</html>