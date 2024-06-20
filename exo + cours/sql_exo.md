`````sql
1 SELECT nom FROM villes WHERE nom_reel LIKE 'P%';
2 SELECT nom FROM villes WHERE departement BETWEEN 75 AND 95;
3 SELECT DISTINCT nom_reel FROM villes WHERE population_2010 > 20000;
4 SELECT nom FROM villes WHERE code_postal BETWEEN 75000 AND 75020;
5 SELECT nom FROM villes WHERE departement NOT IN(13,33,69);
6 SELECT nom FROM villes WHERE (population_2010 BETWEEN 10000 AND 50000) AND departement = 75;
7 SELECT nom FROM villes WHERE nom_reel LIKE 'P%' OR nom_reel LIKE 'B%';
8 SELECT nom FROM villes WHERE densite_2010 > 1000 AND population_2010 < 20000;
9 SELECT nom FROM villes WHERE nom_reel != nom_simple;
10 SELECT nom FROM villes WHERE nom = nom_reel;
``````


Exercice 1
`````sql
1
CREATE DATABASE formation;
2
USE formation;
CREATE TABLE stagiaire
(
id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(255) NOT NULL,
prenom VARCHAR(255)NOT NULL,
date_naissance DATE NOT NULL,
email VARCHAR(255) NOT NULL
);


3
INSERT INTO stagiaire (nom, prenom, date_naissance, email)
VALUES
    ('Lambert', 'Marc', '1984-02-14', 'marc.lambert@example.com'),
    ('Dubois', 'Sandra', '1992-11-07', 'sandra.dubois@example.com'),
    ('Bernard', 'Luc', '1977-03-28', 'luc.bernard@example.com'),
    ('Fournier', 'Aurélie', '1989-09-16', 'aurelie.fournier@example.com'),
    ('Gauthier', 'Benjamin', '1996-05-03', 'benjamin.gauthier@example.com'),
    ('Rousseau', 'Charlotte', '1981-01-25', 'charlotte.rousseau@example.com'),
    ('Verdier', 'David', '1987-07-19', 'david.verdier@example.com'),
    ('Mercier', 'Elise', '1994-04-12', 'elise.mercier@example.com'),
    ('Picard', 'Eisa', '1973-10-27', 'elisa.picard@example.com'),
    ('Chevalier', 'Julie', '1985-06-18', 'julie.chevalier@example.com');
``````

Ex 2
`````sql
1 
/*d'abord trouver l'id d'Elise*/
SELECT * from stagiaire where prenom = 'Elise';
UPDATE stagiaire SET prenom = 'Elisa' WHERE id = 8;

2
DELETE FROM stagiaire
WHERE id = 2;

3
DELETE FROM stagiaire;

4
DROP TABLE stagiaire;

5
DROP DATABASE formation;

6
DROP DATABASE IF EXISTS formation;
``````

Ex3
`````sql
1
ALTER TABLE stagiaire ADD telephone VARCHAR(10);

2
ALTER TABLE stagiaire MODIFY email VARCHAR(255) UNIQUE;

3
ALTER TABLE stagiaire ADD adresse VARCHAR(255) AFTER prenom;

4
ALTER TABLE stagiaire DROP COLUMN adresse;

5

ALTER TABLE stagiaire
    CHANGE telephone tel VARCHAR(20);
6

ALTER TABLE stagiaire MODIFY COLUMN tel VARCHAR(20) NOT NULL;

7
ALTER TABLE stagiaire ADD sexe VARCHAR(255) AFTER date_naissance;

8

ALTER TABLE stagiaire MODIFY COLUMN sexe VARCHAR(20) NOT NULL;

9

ALTER TABLE stagiaire MODIFY COLUMN sexe VARCHAR(1) NOT NULL;

10

ALTER TABLE stagiaire MODIFY sexe ENUM('M','F');

11

ALTER TABLE stagiaire ADD pays VARCHAR(255) AFTER email;

12

ALTER TABLE stagiaire MODIFY pays VARCHAR(2);

13

ALTER TABLE stagiaire ADD CONSTRAINT check_pays ,CHECK (pays IN('FR','BE','CH'));




``````
