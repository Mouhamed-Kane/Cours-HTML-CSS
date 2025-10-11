<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php 

// définir des variables et les mettre à des valeurs vides
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Champs Nom obligatoire";
    } else {
      $name = test_input($_POST["name"]);
    }
    
  
    if (empty($_POST["email"])) {
      $emailErr = "Champs Email obligatoire";
    } else {
      $email = test_input($_POST["email"]);
    }
      
  
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }
  
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  
  
    if (empty($_POST["gender"])) {
      $genderErr = "Champs Sexe obligatoire";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<h2>PHP Exemple Validation Formulaire </h2>
<p><span class="error">* champs requis</span></p>
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
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Vos données:</h2>";
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