

<?php
$d = date("D");
if($d == "Fri"){
    echo "Bon week-end!";
} 
elseif($d == "Sun"){
    echo "Bon dimanche!";
} 
else{
    echo "On est $d. Bonne journée!";
}
?>

