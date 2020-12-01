<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La fonction array_pop()</title>
</head>
<body>
    <?php
    //Extrait un élément de la fin du tableau :

    $tableau = array("Lundi","Mardi","Mercredi"); 
    $jour = array_pop($tableau); 
    var_dump($jour);
    var_dump($tableau);
    
    //Après cette opération, $tableau ne contient plus que Lundi et Mardi.
    ?>
</body>
</html>