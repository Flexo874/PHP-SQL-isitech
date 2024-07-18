<?php
include 'PDO.php';

$pdo = connection();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $quantite = $_POST['quantite'];
    $description = $_POST['description'];

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO medicament (nom, quantite, description) VALUES ('{$nom}', {$quantite}, '{$description}')";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $stmt->fetch();
    header("location: ../pages/stock.php");
}
