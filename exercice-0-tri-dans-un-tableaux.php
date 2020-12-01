<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri dans les tableaux</title>
</head>
<body>
<?php
  $nom = array("franck","laurent","caroline","magali","veronique");   
  sort($nom);

  for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
  {
     echo "$nom[$nb1]<br>";
  }
  var_dump($nom);
?>

<?php
  $nom = array("franck","laurent","caroline","magali","veronique");   
  rsort($nom);

  for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
  {
     echo "$nom[$nb1]<br>";
  }
  var_dump($nom);
?>



    
</body>
</html>