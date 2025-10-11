<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formmulaire </h2>
    <form action="welcome.php" method="post">
        <p>Nom : <input type="text" name="nom"></p>
        <p>Prénom : <input type="text" name="prenom"></p>
        <p>Date de naissance : <input type="date" name="dateNais"></p>
        <p>Mot de passe : <input type="password" name="password"></p>
        <p>Confirmer mot de passe : <input type="password" name="password"></p>
        <p><input type="checkbox"> J'accepte <a href="#">les conditions d'utilisations </a></p>
        <p><input type="submit" value="Enregistrer"></p>
    </form>
</body>
</html>