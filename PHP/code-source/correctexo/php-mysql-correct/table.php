<?php 

    $link = mysqli_connect ('localhost', 'root', '', 'classe');

    if ($link === false) {
        die ('Erreur : Connexion impossible' . mysqli_connect_error() );
    }
    
    $sql = 'CREATE TABLE etudiant(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nom VARCHAR(70) NOT NULL,
        prenom VARCHAR(90) NOT NULL,
        activite VARCHAR(90) NOT NULL 
    )';

    if (mysqli_query($link, $sql)) {
        echo 'Table créée avec succès';
    } else {
        echo 'Impossible de créer la table ' . $sql .mysqli_error($link);
    }

    mysqli_close($link);
  
?>