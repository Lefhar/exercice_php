<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autres fonctions</title>
</head>
<body>
<h1>Autres fonctions</h1>
<ul>
<li>array_reverse()</li>
<li>array_key_exists()</li>
<li>array_merge()</li>
<li>array_diff()</li>
<li>array_intersect()</li>
<li>array_column()</li>
<li>array_slice()</li>
<li>array_splice()</li>
<li>array_sum()</li>
<li>array_unique()</li>
<li>in_array()</li>
<li>array_values()</li>
<li>shuffle()</li>
</ul>

<h2>Exemple array_reverse();</h2>
<?php
//change le sens des mots dans le tableau en ordre décroisant
   $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
   $tableau = array_reverse($tableau);
   var_dump($tableau);
?>
<hr>
<h2>array_key_exists();</h2>
<?php
//on teste si l'un des élément existe
   $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
   if(array_key_exists('1', $tableau)){//on séléctionne l'élément 1 (0 1 2 3 4)
    echo "L'élément 'Mardi' existe dans le tableau";
}

?>
<hr>
<h2>array_merge();</h2>
<?php
//rassemble deux tableau
   $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
   $tableau2 = array("Janvier","Février","Mars", "Avril", "Mai"); //tableau 2
   $result = array_merge($tableau, $tableau2);//assemblage des deux tableau
   var_dump($result);
?>
<hr>
<h2>array_diff();</h2>
<?php
//compare deux tableau
   $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
   $tableau2 = array("Lundi","samedi"); //tableau 2
   $result = array_diff($tableau, $tableau2);//ressort les mots unique par rapport à tableau 1
   var_dump($result);
?>
<hr>

<h2>array_intersect();</h2>
<?php
//array_intersect — Calcule l'intersection de tableaux
   $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
   $tableau2 = array("Lundi","samedi","Vendredi"); //tableau 2
   $result = array_intersect($tableau, $tableau2);//ressort les mots identique dans les deux tableau
   var_dump($result);
?>
<hr>


<h2>array_column();</h2>
<?php
//array_column — Retourne les valeurs d'une colonne d'un tableau d'entrée
   $tabcolumn = array(
       array(
        'jour1'=>'Lundi',
        'jour2'=>'Mardi',
        'jour3'=>'Mercredi',
        'jour4'=>'Jeudi',
        'jour5'=>'Vendredi',
            ),
       array(
        'Mois1'=>'Janvier',
        'Mois2'=>'Février',
        'Mois3'=>'Mars',
        'Mois4'=>'Avril',
        'Mois5'=>'Mai',
            )
   ); //tableau 1
   $result = array_column($tabcolumn, 'jour2');//recupére jour2 dans les deux tableaux
   var_dump($result);

?>
<hr>

<h2>array_slice();</h2>
<?php
//array_slice — extrait une portion de tableau
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
$tableau = array_slice($tableau, 2); //extrait tout à partir de  l'élement 2
   var_dump($tableau);

?>
<hr>


<h2>array_splice();</h2>
<?php
//array_splice — Efface et remplace une portion de tableau
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
$tableau = array_splice($tableau, -1); //efface tout sauf l'élément 0
   var_dump($tableau);

?>
<hr>

<h2>array_sum();</h2>
<?php
//array_sum(); - Calcule la somme des valeurs du tableau
$tableau = array(9,6,5,4,2,3,8,9); //tableau 1
$total = array_sum($tableau); //somme du tableaux
   var_dump($total);

?>
<hr>
<h2>array_unique();</h2>
<?php
//array_unique(); - retire les doublons dans un tableau
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi","Lundi","Mardi","Mercredi", "Jeudi", "Vendredi","Lundi","Samedi","Dimanche"); //tableau 1
$tableau = array_unique ($tableau); //somme du tableaux
   var_dump($tableau);

?>
<hr>

<h2>in_array();</h2>
<?php
//in_array(); - regarde si présent dans le tableau
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
if (in_array("Mardi", $tableau)) {
    echo "Mardi est présent";
}
?>
<hr>

<h2>array_values();</h2>
<?php
//array_values(); - Retourne toutes les valeurs d'un tableau
$tableau = array(
    "jour1"=>"Lundi",
    "jour2"=>"Mardi",
    "jour3"=>"Mercredi",
    "jour4"=>"Jeudi",
    "jour5"=>"Vendredi"
); //tableau 1
        print_r(array_values($tableau));
?>
<hr>


<h2>shuffle();</h2>
<?php
//shuffle(); - Mélange les éléments d'un tableau
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); //tableau 1
 $keys = array_keys($tableau);//on recupére les clefs du tableau
    shuffle($keys);//on mélange les clefs du tableau
    $random = array();//redéclare le tableau
    foreach ($keys as $key)//on fait une recherche par clef
      $random[$key] = $tableau[$key];//clef => mot
  
      var_dump($random);//affichage du tableau
  
 
?>
<hr>
</body>
</html>