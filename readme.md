# Pharmacy
# TEST GITHUB
## Description
Pharmacy est un site web qui permet 
aux professionnels de gerer leurs stock de médicaments.
L'utilisateur peut avoir une liste complète du stock avec la quantité et la description de chaque produit. Il peut ajouter, modifier ou encore supprimer un produit.



## Technologies utilisées
- HTML/CSS
- PHP
- MySQL(MariaDB)
- APACHE


## Database
J'ai exporté la bdd dans un fichier "meds.sql" pour l'importer directement sur phpMyAdmin.
sinon il faudra créer la base de données et les tables users et medicament sur phpMyAdmin avec des requetes SQL qui suivent.

````sql
CREATE DATABASE meds;
       
USE meds;
    
CREATE TABLE `medicament` (
   `id` int(11) NOT NULL,
   `nom` varchar(255) NOT NULL,
   `quantite` int(11) NOT NULL,
   `description` varchar(255) DEFAULT NULL
);

CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `password` text NOT NULL,
    `username` varchar(10) DEFAULT NULL
);
````



C'est une base de données MySQL.

Tables:
- Users 

| id  | username | password |
|:----|:---------|:---------|
| int | text     | text     |

- Medicament 

|  id  | nom  | quantite | Description |
|:----|:-----|:---------|:------------|
| int | text | int      | text        |    


## Hashing du mot de passe
Le mot de passe est haché avec la fonction PHP ``password_hash`` et vérifié avec la fonction PHP `password_verify`.

## Features
- système de création de compte personnel
- système de connexion / déconnexion
- ajouter/supprimer/modifier (nom, quantité, description) les produits de la BDD 

## SQL connection to MariaDB
J'utilise la classe PDO pour établir une connexion avec la base de donnée.

### Configuration des paramètres de connexion 
Définition des paramètres de connexion à la base de données, tels que le nom de l'hôte, le nom de la base de données, le nom d'utilisateur et le mot de passe.

````php
        $host = '127.0.0.1';
        $db   = 'meds';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
````

### Création de la chaîne de connexion DSN
La chaîne de connexion DSN (Data Source Name) contient les informations nécessaires pour se connecter à la base de données.
``````````php 
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
``````````

### Connexion à la base de données avec PDO
Utilisation des paramètres définis et la chaîne DSN pour créer une instance de la classe PDO.
``````````````````php
  try {
            $pdo = new PDO($dsn, $user, $pass, $options);

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
``````````````````






