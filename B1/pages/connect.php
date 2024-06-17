<?php
session_start();
$id_session = session_id();
function verify_login($username, $password) {
    // Pour cet exemple, utilisons des informations de connexion fixes
    $correct_username = 'test';
    $correct_password = 'test';

    if ($username === $correct_username && $password === $correct_password) {
        return true;
    } else {
        return false;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Appeler la fonction de vérification
    if (verify_login($username, $password)) {
        // Stocker les informations de l'utilisateur dans la session
        $_SESSION['username'] = $username;
        // Redirection vers la page d'accueil
        header('Location: ../index.php');
    }


}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Style/connectss.css">
</head>
<body>
<div class="login-container">
    <h2>Connexion</h2>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>
