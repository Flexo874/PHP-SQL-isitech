<?php
require_once 'PDO.php';
$pdo = connection();

$id = $_GET['id'];

$sql = "DELETE FROM medicament WHERE id = {$id}";
$stmt = $pdo->prepare($sql);
$stmt->execute();

header('Location: ../pages/stock.php');
