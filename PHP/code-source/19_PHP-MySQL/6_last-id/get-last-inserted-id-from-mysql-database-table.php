<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Vérifier la connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tenter l'exécution de la requête d'insertion
$sql = "INSERT INTO persons (first_name, last_name, email)
VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if(mysqli_query($link, $sql)){
    // Obtenir le dernier identifiant inséré
    $last_id = mysqli_insert_id($link);
    echo "Enregistrements insérés avec succès.
     Le dernier ID inséré est: " . $last_id;
} else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermer la connexion
mysqli_close($link);
?>