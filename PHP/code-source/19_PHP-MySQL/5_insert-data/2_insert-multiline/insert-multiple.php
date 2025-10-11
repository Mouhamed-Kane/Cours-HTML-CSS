<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Vérifiez connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tentative d'exécution de la requête d'insertion
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Diop', 'Mamadou', 'mamado@diop.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com'),
            ('Ndiaye', 'Lamine', 'ndiaye@lamine.com')";
if(mysqli_query($link, $sql)){
    echo "Enregistrements ajoutés avec succès.";
} else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Close connexion
mysqli_close($link);
?>