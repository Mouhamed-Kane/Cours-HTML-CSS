

<?php
$year = 2022;
// Les années bissextiles sont divisibles par 400 ou par 4, mais pas par 100.
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year est une année bissextile.";
} else{
    echo "$year n'est pas une année bissextile.";
}
?>


