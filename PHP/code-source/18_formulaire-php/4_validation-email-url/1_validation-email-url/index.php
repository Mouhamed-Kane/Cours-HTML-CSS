<!DOCTYPE HTML>  
<html lang="fr">
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// définir des variables et leur donner des valeurs vides
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

//vérifie si la methode post est utilisé pour evoyé les données
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //vérifie si le nom n'est pas
  if (empty($_POST["name"])) {
    $nameErr = "Le nom est requis";
  } else {
    $name = test_input($_POST["name"]);
    // vérifier si le nom ne contient que des lettres et des espaces
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = " Seules les lettres et les espaces blancs sont autorisés";
    }
  }
  
  //vérifie si l'email n'est pas
  if (empty($_POST["email"])) {
    $emailErr = "L'email est requis";
  } else {
    $email = test_input($_POST["email"]);
    // vérifier si l'adresse électronique est bien formée
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format de l'email est invalide";
    }
  }
    
  //vérifie si siteweb n'est pas
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // vérifier si la syntaxe de l'adresse URL est valide
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL Invalide";
    }    
  }
//vérifie si le commentaire n'est pas
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
//vérifie si une option est choisie
  if (empty($_POST["gender"])) {
    $genderErr = "Le sexe est requis";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

// fonction pour vérifier les espaces et tabulation, 
// les antislashes et les caractères spéciales,
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Exemple de validation de formulaire en PHP</h2>
<p><span class="error">* champ obligatoire</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nom: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Commentaire: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Sexe:
  <input type="radio" name="gender" value="femme">Femme
  <input type="radio" name="gender" value="homme">Homme
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Envoyer">  
</form>

<!-- Affichage des données saisies par le user -->
<?php
echo "<h2>Vos Données:</h2>";
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