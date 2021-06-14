<?php
$lastName = '';
$firstName = '';
$errorLastname = '';
$errorFirstname = '';
if (!empty($_POST['lastName'])) {
    $lastName = $_POST['lastName'];
} else {
    $errorLastname = 'votre nom est vide';
}

if (!empty($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
} else {
    $errorFirstname = 'votre prenom est vide';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo "$lastName $firstName<br>";
        echo "$errorLastname <br>";
        echo $errorFirstname;
    ?>
</body>

</html>