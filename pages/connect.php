<?php
require_once '../comps/connection.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Style/connectss.css">
    <style>
        body{
            overflow-x: hidden;
            background-image:url(../Images/lines.webp);
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Connexion</h2>
    <form action="/B1/comps/connection.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password"    required>

        <button type="submit">Se connecter</button>
        <div class="bouton">
                <a href="./createacc.php"> Créer un compte</a>
        </div>

    </form>
</div>
</body>
</html>
