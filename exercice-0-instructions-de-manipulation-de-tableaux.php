<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions de manipulation de tableaux</title>
</head>
<body>
    <?php
    //La fonction asort()
    echo "Tri décroissant sur un tableau associatif, l'indexation des clefs est conservée. Le tri se fait sur les valeurs, pas sur les clés :<br>";
   $tableau = array("a" => "Lundi",
   "b" => "Mardi",
   "c" => "Mercredi",
   "d" => "Jeudi",
   "e" => "Vendredi"
); 
asort($tableau);

foreach($tableau as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
var_dump($valeur);
}

//La fonction arsort()
echo "Tri décroissant sur un tableau associatif, l'indexation des clefs est conservée. Le tri se fait sur les valeurs, pas sur les clés :<br>";
$tableau = array("a" => "Lundi",
"b" => "Mardi",
"c" => "Mercredi",
"d" => "Jeudi");
arsort($tableau);
foreach($tableau as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
var_dump($valeur);
} 

    ?>
</body>
</html>