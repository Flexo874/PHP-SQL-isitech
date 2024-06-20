# Pharmacy

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
C'est une base de données MySQL.

Tables:
- Users :

| id  | username | password |
|:----|:---------|:---------|
| int | text     | text     |

- Medicament :

|  id  | nom  | quantite | Description |
|:----|:-----|:---------|:------------|
| int | text | int      | text        |    


## Hashing du mot de passe
Le mot de passe est haché avec la fonction PHP ``password_hash`` et vérifié avec la fonction PHP `password_verify`.

## Features
- système de création de compte personnel
- système de connexion / déconnexion
- ajouter/supprimer/modifier (nom, quantité, description) les produits de la BDD 


