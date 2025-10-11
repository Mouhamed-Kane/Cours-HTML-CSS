<!DOCTYPE HTML>  
<html lang="fr">
<head>
</head>
<body>  

<?php
// créer les variables et les initialisées à vide
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);

}

function test_input($data) {
  $data = trim($data); //supprimer caractères inutile
  $data = stripslashes($data); //supprimer anti slash
  $data = htmlspecialchars($data); // convertir les els non html en HTML
  return $data;
}
?>

<h2>PHP Exemple Validation Formulaire  </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nom: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Commentaire: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Sexe:
  <input type="radio" name="gender" value="femme">Femmme
  <input type="radio" name="gender" value="homme">Homme
  <br><br>
  <input type="submit" name="submit" value="Envoyer">  
</form>

<?php
echo "<h2>Vos données sont:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>