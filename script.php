<?php 
echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 

foreach ($_REQUEST["Fjour"] as $jour)  //correction de la variable $jour
{ 
    echo"- $jour<br>"; 
} 
?> 