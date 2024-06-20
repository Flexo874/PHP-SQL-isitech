<?php
require_once '../comps/newacc.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Style/connectss2.css">
    <style>
        body{
            background-image: url("../Images/lines.webp");
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Inscription</h2>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <label for="password">Confirmer mot de passe :</label>
        <input type="password" id="repassword" name="repassword" required>


        <button type="submit">Créer un compte</button>
    </form>
</div>
</body>
</html>
