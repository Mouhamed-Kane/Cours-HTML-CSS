<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Vérifiez connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tentative d'exécution de la requête d'insertion
$sql = "INSERT INTO persons (id, first_name, last_name, email) 
        VALUES (1, 'Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Enregistrements insérés avec succès.";
} else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Close connexion
mysqli_close($link);
?>