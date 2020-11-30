<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<form action="" method="post">
<input type="text" id="nbr1"  name="nbr1">
<select name="operator" id="operator">
<option>Séléctionner l'opérateur</option>
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<input type="text" id="nbr2"  name="nbr2">
<button type="submit">Calculer</button>
<button type="reset">Réinitialiser</button>
</form>
    <?php 
  
    if(!empty($_POST['nbr1'])&&!empty($_POST['nbr2'])&&!empty($_POST['operator'])&&preg_match('/\+|\-|\*|\//i',$_POST['operator'])){
$nbr1 = (int)$_POST['nbr1'];
$nbr2 = (int)$_POST['nbr1'];
$operator = $_POST['operator'];
echo calculator($nbr1,$nbr2,$operator);
    }
    function calculator($nombre1,$nombre2,$multip){
        switch($multip)
        {

            //addition        
            case '+';
            $resultat = $nombre1 + $nombre2;
            $operation = $nombre1.'+'.$nombre2.' = '.$resultat;
                    break;

            //soustraction
            case '-';
            $resultat = $nombre1 + $nombre2;
            $operation = $nombre1.'+'.$nombre2.' = '.$resultat;
            break;

            //multiplication
            case '*';
            $resultat = $nombre1 + $nombre2;
            $operation = $nombre1.'+'.$nombre2.' = '.$resultat;
            break;

            //division
            case '/';
            $resultat = $nombre1 + $nombre2;
            $operation = $nombre1.'+'.$nombre2.' = '.$resultat;
            break;
            default:
            $operation = "Désolé j'ai pas reussit à calculer";

        }
     return $operation;
    }
    ?>
</body>
</html>