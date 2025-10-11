<?php
// Démarrer une session
session_start();
 
// Supprimer les données de sessions
if(isset($_SESSION["lastname"])){
    unset($_SESSION["lastname"]);
}
echo $_SESSION["firstname"];
?>