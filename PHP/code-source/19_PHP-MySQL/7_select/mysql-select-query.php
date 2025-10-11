
<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe). */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Vérifier la connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Tenter d'exécuter une requête de sélection
$sql = "SELECT * FROM persons";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Libérer le jeu de résultats
        mysqli_free_result($result);
    } else{
        echo "Aucun enregistrement correspondant à votre requête 
            n'a été trouvé.";
    }
}
 else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermer la connexion
mysqli_close($link);
?>