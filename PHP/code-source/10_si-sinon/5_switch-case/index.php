
<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Aujourd'hui, c'est lundi. Et on apprenez 
        le PHP.";
        break;
    case "Tue":
        echo "On est mardi. Achetez de la nourriture.";
        break;
    case "Wed":
        echo "Nous sommes mercredi. Visitez un médecin.";
        break;
    case "Thu":
        echo "Nous sommes jeudi. Réparez votre voiture.";
        break;
    case "Fri":
        echo "Nous sommes vendredi. Faites la fête ce soir.";
        break;
    case "Sat":
        echo "Nous sommes samedi. C'est l'heure du cinéma..";
        break;
    case "Sun":
        echo "Aujourd'hui, c'est dimanche. Reposez-vous..";
        break;
    default:
        echo "Aucune information disponible pour ce jour.";
        break;
}
?>

