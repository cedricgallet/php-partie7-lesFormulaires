<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->


<form action="user.php" method="POST">
<p>
<input type="text" name="nom"></input>
<input type="text" name="prenom"></input>
<input type="submit" value="Valider"></input>

</p>

</form>

</body>
</html>