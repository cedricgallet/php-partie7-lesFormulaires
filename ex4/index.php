<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>

<body>
    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
</p>
<form action="user.php" method="post">
        <fieldset>
            <div> 
                Nom : <input type="text" name="lastName" id="lastName" required>
            </div>
            <div>
                Prénom : <input type="text" name="firstName" id="firstName" required>
            </div>
        </fieldset>
        <button type="submit">Envoyer !</button>
    </form>
</body>

</html>