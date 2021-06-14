<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Créer un formulaire sur la page index.php avec :  

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom  


Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode. -->

<form action="ex5.php" method="POST">

<p>
    
<select name="Civilité">
   <option>Monsieur</option>
   <option>Madame</option>
</select>

<input type="text" name="nom"></input>
<input type="text" name="prenom"></input>
<input type="submit" value="Valider"></input>


</p>

</form>

</body>
</html>