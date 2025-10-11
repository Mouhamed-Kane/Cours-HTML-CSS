<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "", "demo");
 
//  Vérifier la connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tenter d'exécuter une requête de mise à jour
$sql = "UPDATE persons SET email='peterparkernew@gmail.com' WHERE id=20";
if(mysqli_query($link, $sql)){
    echo "Les enregistrements ont été mis à jour avec succès.";
} else {
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermer la connexion
mysqli_close($link);
?>