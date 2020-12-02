<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair et impair</title>
</head>
<body>
    <?php 
    $impairs = 0;
    while($impairs < 150)
    {
        $impairs += 1;
        if($impairs % 2 !=0){
            echo $impairs.'<br>';
        }
    }

    echo 'Corrigé<br>';
    for ($i=0; $i<150; $i++)
{    
    /* L'opérateur modulo - signe % - indique le reste d'une division; 
    * ici on divise par 2 (chiffre après le %) 
    * et si on a un reste égal à 0 alors le nombre $i est pair 
    * et on l'affiche avec echo */ 
    if ($i%2 == 0) 
    {
        echo $i."<br>";
    }         
}
    ?>
</body>
</html>