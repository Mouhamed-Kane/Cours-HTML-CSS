<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe).*/
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Vérifier la connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tenter d'exécuter une requête de suppression
$sql = "DELETE FROM persons WHERE first_name='Clark'";
if(mysqli_query($link, $sql)){
    echo "Les enregistrements ont été supprimés avec succès.";
} else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermer la connexion
mysqli_close($link);
?>