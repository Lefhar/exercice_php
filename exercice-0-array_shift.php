<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_shift()</title>
</head>
<body>
    <?php
//Dépile un élément (et un seul) en début du tableau

$tableau = array("Jeudi", "Vendredi"); 
$jour = array_shift($tableau); 
var_dump($tableau);

var_dump($jour);
//Après cette opération, $tableau contient Vendredi et $jour contient Jeudi.
    ?>
</body>
</html>