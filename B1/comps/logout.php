<?php


    session_start();
// Détruire les variables de session
    $_SESSION = array();
    session_destroy();
// Rediriger l'utilisateur
    header("Location: ../pages/connect.php");
    exit;



