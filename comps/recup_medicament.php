<?php
include_once 'PDO.php';

$pdo = connection();
$sql = "SELECT * FROM medicament";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();



