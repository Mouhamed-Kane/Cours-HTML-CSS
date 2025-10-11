<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "");
 
// Vérifiez la connexion
if($link === false){
    die("ERREUR: Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tenter d'exécuter une requête de création de base de données
$sql = "CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
    echo "Base de données créée avec succès";
} else{
    echo "ERREUR: Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermez la connexion
mysqli_close($link);
?>