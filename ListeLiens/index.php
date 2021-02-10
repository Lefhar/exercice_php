<?php
$fp = fopen("ListeLiens.txt", "r");
echo '<ul>';
while (!feof($fp))
{
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    $ligne = fgets($fp, 4096);
    if(!empty($ligne)){
    echo "\n<li><a href='".urldecode(trim($ligne))."' target='_blank'>".urldecode(trim($ligne))."</a></li>\n";
    }
}
fclose($fp);
echo '</ul>';