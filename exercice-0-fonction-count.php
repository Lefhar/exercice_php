<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La fonction count()</title>
</head>
<body>
<h2>La fonction count()</h2>
    <?php
    $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
    var_dump($tableau);
    $nb = count($tableau); 
    var_dump($tableau);
    echo"Le tableau contient ".$nb." éléments."; 
    ?>
</body>
</html>