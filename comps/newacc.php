<?php
require "PDO.php";
$pdo = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $hpassword=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username = '{$username}'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($repassword == $password && $username != $user['username']) {
        $sql = "INSERT INTO users (username, password) VALUES ('{$username}','{$hpassword}')";


        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        echo "New record created successfully";
        header('Location: ../pages/connect.php');
        exit();
    }
    else{

        echo "error connection";;
        echo $hpassword;
    }
}


