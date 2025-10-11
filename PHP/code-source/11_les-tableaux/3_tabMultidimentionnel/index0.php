
<?php
//Création tableau
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com"
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com"
    )
);
// Affiché une valeur
echo "L'adresse email de " .$contacts[0]["name"] . " est " .$contacts[0]["email"];
?>

