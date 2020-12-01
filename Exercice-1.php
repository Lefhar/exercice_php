<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<h1>Exercice 1</h1>
<p>Cet exercice est issu d'un cas réel de développement d'une application de gestion de plannings.</p>

<p>Le tableau $a ci-dessous représente les plannings de groupes de stagiaires.</p>
<p>Le code 19XXX représente le numéro de groupe.</p>
<p>Les positions correspondent aux numéros de semaines dans l'année (peu importe quelle année).</p>
<p>Les valeurs vides ("") en début et fin de tableau indiquent respectivement que la formation n'a pas commencé / est terminée.</p>
<p>Quand une formation a débuté, les cellules vides indiquent des vacances.</p>
<code>$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
    </code>

    <?php
    //tableau
    $a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
    "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
    "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
   );

   $key = array_search('Validation', $a[19002]);// on recherche le mot validation
   $semaine = $key +1;// on rajoute 1 car sa démarre à zéro
   echo 'Quelle semaine a lieu la validation du groupe 19002 ?<br>
   la validation du groupe 19002 aura lieu la semaine '.$semaine.'/'.count($a[19002]) ;
   ?>
</body>
</html>