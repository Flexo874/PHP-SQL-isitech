<?php
session_start();
$id_session = session_id();
include_once 'PDO.php';
$pdo = connection();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '{$username}'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    $correct_username = $user['username'];
    $correct_password = $user['password'];

    echo $password;
    echo '<br>';
    echo $correct_password;
    echo '<br>';

    echo password_verify($password, $correct_password) ? 'true' : 'false';

    if ($correct_username == $username && password_verify($password,$correct_password)) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    }

}











