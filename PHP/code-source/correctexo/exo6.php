<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Déclarer une variable $budget qui contient la somme de 1 550 000 FCFA.
     Déclarer une variable $achats qui contient la somme de 1 554 000 FCFA. 
     Afficher si le budget permet de payer les achats.
    Utiliser l’opérateur ternaire si possible. -->

    <?php
        $budget = 1550000;
        $achats = 1554000;

        // if($budget >= $achats){
        //     echo 'Achat payable';
        // } else {
        //     echo 'Achat non payable';
        // }

       // (condition) ? 'vrai' : 'faux'
     echo ($budget >= $achats ) ? 'Achat payable' : 'Achat non payable';

    ?>
</body>
</html>