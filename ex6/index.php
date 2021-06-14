<?php
$lastName = '';
$firstName = '';
$gender = '';
$errorLastname = '';
$errorFirstname = '';
$errorGender = '';
$result = '';
$form = "<form action='index.php' method='post'>
<fieldset>
    <div>
        <!-- select homme femme -->
        <select name='gender'>
            <option></option>
            <option value='Mr'>Mr</option>
            <option value='Mme'>Mme</option>
        </select>
    </div>
    <div>
        <!-- champs nom -->
        Nom : <input type='text' name='lastName' id='lastName'>
    </div>
    <div>
        <!-- champs prenom -->
        Prénom : <input type='text' name='firstName' id='firstName'>
    </div>
</fieldset>
<button type='submit'>Envoyer !</button>
</form>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
    } else {
        $result = $form;
        $errorLastname = 'votre nom est vide';
    }
    
    if (!empty($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
    } else {
        $result = $form;
        $errorFirstname = 'votre prenom est vide';
    }
    
    if (!empty($_POST['gender'])) {
        $firstName = $_POST['gender'];
    } else {
        $result = $form;
        $errorGender = 'votre genre est vide';
    }
    if (!empty($_POST['gender']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
        $result = $_POST['gender'].' '.$_POST['firstName'].' '.$_POST['lastName'];
    }
       
} else {
    $result = $form;
}



// if (empty($_GET['gender']) || empty($_GET['lastName']) || empty($_GET['firstName'])) {  // isset pour verifier si le parametre existe

//     $result = $form; 

//     } 

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>

<body>
    <?php
// si dans le URL par la methode POST ou GET sil y a rien 
// - on affiche le form 

echo $result;
echo "$errorLastname <br>";
echo "$errorFirstname <br>" ;
echo $errorGender ;
?>
  
  



</body>

</html>