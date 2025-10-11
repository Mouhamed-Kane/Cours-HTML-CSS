

<?php
// Définition de la classe
class greeting{
    // propriétés
    public $str = "Hello World!";
    
    // méthodes
    function show_greeting(){
        return $this->str;
    }
}
 
// Créer un objet à partir d'une classe
$message = new greeting;
var_dump($message);
?>
