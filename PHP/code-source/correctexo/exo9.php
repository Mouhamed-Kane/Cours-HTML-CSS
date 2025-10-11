<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En utilisant la boucle while, afficher tous les codes postaux possibles pour le
département 77 (de 77000 à 77999) -->

<?php
    $dep = 77000;
    while ($dep <= 77999){
        echo 'Code postale :'. $dep . '<br>';
        $dep++;
    }
    
?>
</body>
</html>