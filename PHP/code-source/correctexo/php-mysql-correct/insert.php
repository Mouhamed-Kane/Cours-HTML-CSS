<?php 

    $link = mysqli_connect ('localhost', 'root', '', 'classe');

    if ($link === false) {
        die ('Erreur : Connexion impossible' . mysqli_connect_error() );
    }
    
    $sql = 'INSERT INTO etudiant(id,nom,prenom,activite)
    VALUES (1, "Diop", "Nafi", "Basket")';

    if (mysqli_query($link, $sql)) {
        echo 'Nouveau enregistrement avec succès';
    } else {
        echo 'Impossible d\'enregistrer ' . $sql .mysqli_error($link);
    }

    mysqli_close($link);
  
?>