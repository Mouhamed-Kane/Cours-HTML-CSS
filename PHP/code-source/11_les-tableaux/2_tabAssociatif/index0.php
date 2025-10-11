

<?php
$ages = array(
    "Nom"=>"Soukeye", 
    "Age"=>32, 
    "Salutation"=>"Bonjour");
// Afficher la structure du tableau
//print_r($ages); 
echo '<br>';
//var_dump($ages) .'<br>';

echo $ages["Salutation"] . ' ' . $ages["Nom"] . ' tu as ' .$ages["Age"] . ' ans';
?>

