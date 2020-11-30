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
    ?>
</body>
</html>