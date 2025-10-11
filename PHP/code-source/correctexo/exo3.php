<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prix_ht = 50;
    $tva = 20;
    $prix_ttc = $prix_ht * (1 + ($tva/100));
    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
    ?>
</body>
</html>