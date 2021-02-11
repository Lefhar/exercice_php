<?php
$dir = './';
$MyDirectory = opendir($dir) or die('Erreur');// on ouvre la direction si le répertoire existe
while($Entry = @readdir($MyDirectory)) {
    if(is_dir($dir.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {

        $MyDirectory2 =  opendir($Entry) or die('Erreur');// on ouvre la direction si le sous-répertoire existe
        while($Entry2 = @readdir($MyDirectory2)) {//on boucle les fichier du sous repertoire
            if(is_dir($dir.'/'.$Entry2)&& $Entry2 != '.' && $Entry2 != '..') {

            }
            else {
            if(preg_match("`.txt`",$Entry2)){
                echo 'fichier dans le chemin '.$Entry.'/'.$Entry2;
                lirefichier($Entry.'/'.$Entry2);

        }
            }
        }
    }
    else {
        if(preg_match("`.txt`",$Entry)){
            echo 'fichier dans le chemin à la racine';

            lirefichier($Entry);
        }
    }
}
closedir($MyDirectory);

/**brief cette fonction permet l'ouverture et la lecture du fichier txt
 * @param $file emplacement du fichier
 * @return echo ligne
 */
function lirefichier($file){
    $fp = fopen($file, "r");
while (!feof($fp)) {
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    $ligne = fgets($fp, 4096);
    if (!empty($ligne)) {
        echo '<br>donnée <strong>'.urldecode(trim($ligne)).'</strong><br>';
    }
}
fclose($fp);
}



