<?php
session_start();
if(!$_SESSION['mdp']){
    header('location: connexion.php');
}

echo $_SESSION['pseudo'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>index</h1>
    <a href="deconnexion.php">
        <button>Se déconnecter</button>
    </a>
</body>
</html>