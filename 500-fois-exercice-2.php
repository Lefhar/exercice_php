<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.</title>
</head>
<body>
    <?php
$sauvegarde = 0;
while($sauvegarde < 500){
    $sauvegarde +=1;
    echo '- '.$sauvegarde.' Je dois faire des sauvegardes régulières de mes fichiers.<br>';
}

echo 'corrigé<br>';
for ($i=0; $i<500; $i++)
{    
   echo "Je dois être acteur de ma formation<br>";
}
    ?>
</body>
</html>