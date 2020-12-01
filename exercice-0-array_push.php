<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La fonction array_push();</title>
</head>
<body>
    <?php
    //Cette instruction permet d'ajouter un élément à la fin du tableau.
 $tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
 array_push($tableau, "Vendredi"); 
 var_dump($tableau);
    ?>
</body>
</html>