<?php 

    $link = mysqli_connect ('localhost', 'root', '');

    if ($link === false) {
        die ('Erreur : Connexion impossible' . mysqli_connect_error() );
    }
    $sql = 'CREATE DATABASE classe';
    if (mysqli_query($link, $sql)) {
        echo 'Base de donnée créer avec succes,';
    } else {
        echo 'Erreur : impossible d\'excécuté  $sql' . mysqli_error($link);
    }
    mysqli_close($link);
  
?>