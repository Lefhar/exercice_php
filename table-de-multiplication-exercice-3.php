<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant :</title>
    <style> table, tr, td, th 
    { 
       border: 1px solid #000000;
    }
    </style>
</head>
<body>
<?php
//multiplication jusqu'a 12 du coup m = 12
$multiple = 12; 
//tableau
echo "<table><tr><th></th>"; 
//on commence à partir de zero
$i = 0;
while ($i<=$multiple){
    echo "<th>".$i."</th>";
    $i++;
}
echo "</tr>";
//seconde boucle part de 0
$x = 0;
while($x<=$multiple){
    echo "<tr>"; //a chaque boucle j'ouvre une ligne
    echo "<th>".$x."</th>"; //j'affiche la valeur dans la première case
    //on multiplie de 0 à 12
    $y = 0;
    while($y<=$multiple){
        echo "<td>".($x*$y)."</td>"; 
    $y++;
    }
    echo "</tr>"; 
    $x++;
}
?>
</body>
</html>