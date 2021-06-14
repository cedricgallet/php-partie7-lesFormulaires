
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>

<body>
    <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
    <form action="user.php" method="GET">
        <fieldset>
            <div> 
                Nom : <input type="text" name="lastName" id="lastName">
            </div>
            <div>
                Prénom : <input type="text" name="firstName" id="firstName">
            </div>
        </fieldset>
        <button type="submit">Envoyer !</button>
    </form>
</body>

</html>