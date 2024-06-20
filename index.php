<?php
require_once ('comps/login.php');
require_once ('comps/PDO.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie</title>
    <link rel="stylesheet" href="Style/stylesheet.css">

</head>
    <header class="header">

        <nav class="nav">
            <li>  <img src="Images/logo_render_v2.png" alt="Logo"></li>
            <li> <a href="#" data-text="Home">Home</a> </li>
            <li> <a href="pages/stock.php" data-text="Stocks">Stocks</a> </li>

        </nav>


        <a href="comps/logout.php">
            <img src="Images/icons8-login-50.png" alt="Login">
        </a>

    </header>
    <body>

    </body>
</html>


