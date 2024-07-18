<?php
require_once 'PDO.php';
$pdo = connection();

$id = $_GET['id'];
function preremplirForm($id)
{
    $pdo = connection();
    $sql = "SELECT * FROM medicament WHERE id = {$id}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom= $_POST['nom'];
    $quantite = $_POST['quantite'];
    $description = $_POST['description'];


    $sql = "UPDATE medicament SET nom = '{$nom}' , quantite = {$quantite} , description = '{$description}' WHERE id = {$id};";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $stmt->fetch();
    header("location: ../pages/stock.php");

}





