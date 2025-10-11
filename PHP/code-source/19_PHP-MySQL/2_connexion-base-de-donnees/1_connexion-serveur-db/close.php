<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "");
 
// Vérifier la connexion
if($link === false){
    die("ERREUR: Impossible de se connecter. " . mysqli_connect_error());
}
 
// Imprimer les informations
echo "Connexion réussie. Informations sur l'hôte: " . mysqli_get_host_info($link);

// Fermer la connexion
mysqli_close($link);
?>