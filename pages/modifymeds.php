<?php
require_once "../comps/login.php";
require_once "../comps/meds_modify.php";
$medicament = preremplirForm($_GET['id']);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
    <link rel="stylesheet" href="../Style/modifymed.css">
    <style>
        body{
            overflow-x: hidden;
            background-image:url(../Images/lines.webp);
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Modifier</h2>
    <form action="../comps/meds_modify.php?id=<?php echo $_GET['id'] ?>" method="post">
        <label for="nom">Nom du Médicament :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $medicament['nom']?>" required>

        <label for="quantite">Quantité :</label>
        <input type="number" id="quantite" name="quantite" value="<?php echo $medicament['quantite']?>"  required >

        <label for="description">Description :</label>


        <textarea class="desc" type="text" id="description" name="description" required><?php echo $medicament['description']?>
        </textarea>

        <button type="submit">Modifier</button>
        <a href="stock.php">
            <button>Retour</button>
        </a>


    </form>
</div>
</body>
</html>