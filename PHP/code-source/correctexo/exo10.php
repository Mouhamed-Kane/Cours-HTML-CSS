<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En utilisant la boucle for, afficher 
    la table de multiplication du chiffre 5. -->

    <?php
        $multiple = 5;
        for ($i=1; $i<=10; $i++){
            $result = $multiple * $i;
            echo $multiple . ' * ' . $i . " = " .$result . "<br>";
        }
    ?>
</body>
</html>