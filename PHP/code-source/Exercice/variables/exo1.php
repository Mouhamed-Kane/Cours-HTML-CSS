<!-- Exercice 1 : Déclaration de variables
Objectif : Savoir créer et afficher des variables.
Consignes :
1.	Déclare une variable $nom contenant ton prénom.
2.	Déclare une variable $age contenant ton âge.
3.	Affiche la phrase :
Bonjour, je m'appelle [Nom] et j'ai [Âge] ans.
Dans 2 ans, j'aurai [Âge + 1] ans.
 -->

<?php
$nom = "Moussa";
$age = 19;

echo "Salut je m'appelle " . $nom . " et j'ai " . $age . " ans <br>";
echo "Dans 2 ans, j'aurai " . ($age + 2) . " ans";

?>
