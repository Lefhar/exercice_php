<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_unshift()</title>
</head>
<body>
<?php
//Ajoute un élément en début de tableau
    $tableau = array("Jeudi", "Vendredi"); 
    array_unshift($tableau, "Lundi", "Mardi", "Mercredi"); 
    var_dump($tableau);
    ?>
</body>
</html>