<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload fichier</title>
</head>
<body>
<form action="post-vardump.php" method="POST" enctype="multipart/form-data">
<input type="file" name="fichier" id="fichier"> 
<button type="submit">Envoyer</button><button type="reset">Annuler</button>
</body>
</html>