<?php
// Démarrer session
session_start();
 
// Accéder aux données de sessions
echo 'Salut, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
?>