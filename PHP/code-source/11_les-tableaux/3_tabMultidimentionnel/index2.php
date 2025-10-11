
<?php
$cars = array (
  array("Volvo",22,18), // 0
  array("BMW",15,13), // 1
  array("Peugeot",5,2), // 2
  array("Land Rover",17,15) //3
);

// var_dump($cars);
 echo $cars[0][0].": en stock: ".$cars[0][1].", vendu: ".$cars[0][2].".<br>";
 echo $cars[1][0].": en stock: ".$cars[1][1].", vendu: ".$cars[1][2].".<br>";
 echo $cars[2][0].": en stock: ".$cars[2][1].", vendu: ".$cars[2][2].".<br>";
 echo $cars[3][0].": en stock: ".$cars[3][1].", vendu: ".$cars[3][2].".<br>";
?>


