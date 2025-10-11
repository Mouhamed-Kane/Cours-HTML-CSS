<?php
// Vérifier si un cookie est défini ou non
if(isset($_COOKIE["username"])){
    echo "Bonjour Mr " . $_COOKIE["username"];
} else{
    echo "Bienvenue à l'invité!";
}
?>