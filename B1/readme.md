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
Ne modifie pas la bdd
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
