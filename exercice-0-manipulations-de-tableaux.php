<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulations de tableaux</title>
</head>
<body>
    <?php
     $facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
     $facture_sixmois=0; 
 
     foreach ($facture as $mois => $valeur) 
     { 
        echo "Facture du mois de $mois : $valeur Euros<br />"; 
        $facture_sixmois +=$valeur; 
        var_dump($facture_sixmois);
     } 
 
     echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 
     ?> 
</body>
</html>