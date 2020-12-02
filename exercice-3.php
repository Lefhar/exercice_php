<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
<h1>Exercice 3</h1>
<p>Extraire, dans un nouveau tableau, les codes des groupes.</a>

<p>Cet exercice est issu d'un cas réel de développement d'une application de gestion de plannings.</p>

<p>Le tableau $a ci-dessous représente les plannings de groupes de stagiaires.</p>
<p>Le code 19XXX représente le numéro de groupe.</p>
<p>Les positions correspondent aux numéros de semaines dans l'année (peu importe quelle année).</p>
<p>Les valeurs vides ("") en début et fin de tableau indiquent respectivement que la formation n'a pas commencé / est terminée.</p>
<p>Quand une formation a débuté, les cellules vides indiquent des vacances.</p>
<code>$a = array(
    <p>"19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), </p>
    <p>"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), </p>
    <p>"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") </p>
    );
    </code>

    <?php
    //tableau
    $a = array(
    "19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
   );
   $i = 0;
   $groupe1 =  array();
   $tab =  array();

   foreach ($a as $key => $value) {
    $groupe1[$i] = $value;
    $i++;
}

var_dump($groupe1);

foreach ($groupe1 as $key => $value) {
    $tab[$i] = $value;

}
var_dump($tab);

echo 'corrigé</br>';
$aCodes = array_keys($a);
var_dump($aCodes);

   ?>
</body>
</html>