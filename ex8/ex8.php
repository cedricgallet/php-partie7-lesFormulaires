<?php

$form = '<form action="user.php" method="get">

<select name="genre">
    <option value="Mme">Mme</option>
    <option value="Mr">Mr</option>
</select>

<input type="text" name="nom" placeholder="Nom" required>
<input type="text" name="prenom" placeholder="Prenom" required>
<input type="file" name="file" id="file"> 
<button type="submit">Envoyer</button>
<button type="reset">Effacer</button>
</form>';


// Exercice 8 Devoir 
// Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf. 


// pour eviter de passer par le elseif on peut limiter le format directement dans le input accept="image/png,image/jpeg"


if (empty($_GET['nom']) && empty($_GET['prenom'])){
    $result= $form;
} elseif (PATHINFO($_GET['file'],PATHINFO_EXTENSION) != 'pdf'){
    $result= 'l\'extension n\'est pas au bon format veuillez renvoyer un fichier au format pdf.';
} else {
    $result= $_GET['genre'].' '. $_GET['nom'].' '. $_GET['prenom'] .' '.PATHINFO($_GET['file'],PATHINFO_BASENAME);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 7 les formulaires Ex8</title>
</head>
<body>


<?= $result ?>

</body>
</html>