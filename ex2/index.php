<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>

<body>
<p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>


    <form action="user.php" method="post">
        <fieldset>
            <div>
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname">
            </div>
        </fieldset>
        <button type="submit">Envoyer !</button>
    </form>
</body>

</html>