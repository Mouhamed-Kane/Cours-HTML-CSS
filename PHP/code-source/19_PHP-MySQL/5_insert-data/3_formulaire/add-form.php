<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire d'ajout d'enregistrements</title>
</head>
<body>
<form action="insert.php" method="post">
	<p>
    	<label for="firstName">Prénom:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="lastName">Nom de famille:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
    	<label for="emailAddress">Email:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>