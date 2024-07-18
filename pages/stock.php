<?php
require_once '../comps/login.php';
require_once '../comps/PDO.php';
require_once '../comps/recup_medicament.php';

$pdo = connection();
$sql = "SELECT * FROM medicament";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie</title>
    <link rel="stylesheet" href="../Style/stylesheet.css">
    <link rel="stylesheet" href="../Style/stocksteel.css">
    <style>

        .table{
            height: 700px;
            overflow-y: scroll;

        }
        table {
            border-collapse: collapse;
            margin: 10px auto;
            margin-top:0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 140vh;

        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;

        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
    <header class="header">

        <nav class="nav">
            <li> <a href="../index.php" data-text="Home">Home</a> </li>
            <li> <a href="stock.php" data-text="Stocks">Stocks</a> </li>
            
        </nav>
        <a href="../comps/logout.php">
            <img src="../Images/icons8-login-50.png" alt="Login">
        </a>
    </header>
    <body>
    <div class="global">
    <div class="form-container">
        <h1>Ajouter un Médicament</h1>
        <form action="../comps/insert_medicament.php" method="post">
            <label for="nom">Nom du Médicament:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="nom">Quantite:</label>
            <input type="text" id="quantite" name="quantite" required><br><br>
            <label for="nom">Description:</label>
            <input type="text" id="quantite" name="description" required><br><br>
            <input type="submit" value="Ajouter">
        </form>
    </div>
    <div class="table" style="overflow-x: auto ;">
    <table>
        <thead>
        <tr>

            <th width=200px;>Nom du Médicament</th>
            <th width=100px;>Quantité</th>
            <th>Description</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($result) > 0): ?>
            <?php foreach ($result as $medicament): ?>
                <tr>

                    <td><?php echo htmlspecialchars($medicament['nom']); ?></td>
                    <td><?php echo htmlspecialchars($medicament['quantite']); ?></td>
                    <td><?php echo htmlspecialchars($medicament['description']); ?></td>
                    <td><a href="modifymeds.php?id=<?php echo $medicament['id']?>"><img src="../Images/parametres-gear.png"></a></td>
                    <td><a href="../comps/deletemed.php?id=<?php echo $medicament['id']?>" ><img src="../Images/img.png"> </a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Aucun médicament en stock.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
    </div>


    </body>
</html>


