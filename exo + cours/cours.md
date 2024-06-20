# Notes PHP

## Instalation
- installer XAMMP
- injstaller IDE (ex :phpstorm)

## Variable
Declarer varialbes :
- '$' devant le nom de la variable:
```php

$texte = 'hello';
$nombre = 42;

```

## Structure de  controle

`````php
if ($nombre == 42)
{
    echo 'le nombre est 42'
}
elseif ($nombre > 42)
{
     echo 'le nombre est superieur a 42'
}
else 
{
     echo 'le nombre est inferieur a 42'
}
``````

## Boucles
````php
for($i=0;i<10;$i++)
{
    echo $i . ' ';
}
````
## Fonction
Syntax fonction
````php
    function add($a,$b)
    {
        return $a+$b;
    }
````
- isset permet de verifier si la variable est definie

````php
    function add($a,$b)
    {
        return $a+$b;
    }
````
- htmlspecialchar: permet de securiser la bdd 
## $_GET
Ne modifie pas la bdd, utilise les donées directement de l'URL 
````php
  <form action="" method="get">
        Nom: <input type="text" name="nom">
        <input type="submit" value="envoyer">
    </form>
    <?php echo "Bonjour " . $_GET["nom"]; ?>
````

## Forms
HTML : 
````html
<form action="" method="get">
    Nom: <input type="text" name="nom">
    <input type="submit" value="envoyer">
</form>
````

# SQL DU PROJET

Pour ajouter un medicament a la base
`````sql
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $quantite = $_POST['quantite'];
    $date_expiration = $_POST['date_expiration'];

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO medicament (nom, quantite, date_expiration) VALUES ({$nom},{$quantite},{$date_expiration})";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $stmt->fetch();
}

``````
System de login
`````sql
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
    if ($correct_username == $username && $correct_password == $password) {
        $_SESSION['username'] = $username;
        header('Location: /B1/index.php');
        exit();
    }

}
``````

System de création de compte
`````sql
<?php
require "PDO.php";
$pdo = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $hpassword=password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($repassword == $password && $username != $user['username']) {
        $sql = "INSERT INTO users (username, password) VALUES ('{$username}','{$hpassword}')";


        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        echo "New record created successfully";
        header('Location: connect.php');
        exit();
    }

}




``````

Script qui supprime un mdecament

````sql
<?php
require_once 'PDO.php';
$pdo = connection();

$id = $_GET['id'];

$sql = "DELETE FROM medicament WHERE id = {$id}";
$stmt = $pdo->prepare($sql);
$stmt->execute();

header('Location: /B1/pages/stock.php');

````
