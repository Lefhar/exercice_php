<?php
/*
nom=
prenom=
sexe=féminin
date=
cp=
adresse=
ville=
email=
mescommandes=
question=
*/
//recupération des données du formulaire contact de jarditou

//validation de nom
if(!empty($_POST['nom'])&&strlen($_POST['nom'])>=2&&preg_match("/^[a-zA-Z-' ]*$/",$_POST['nom']))// on sait jamais mr wu ^^
{

echo  $_POST['nom'].'<br>';
}
else
{
    echo  $_POST['nom'].' nom incorrect dois contenir au moins 2 caractéres<br>';
}

//validation de prenom
if(!empty($_POST['prenom'])&&strlen($_POST['prenom'])>=2&&preg_match("/^[a-zA-Z-' ]*$/",$_POST['prenom']))// on sait jamais exemple An  https://www.enfant.com/prenoms/courts/^^
{

    echo $_POST['prenom'].'<br>';
    
}
else
{
    echo $_POST['prenom'].' prenom incorrect dois contenir au moins 2 caractéres<br>';
}

//vérification d'adresse
if(!empty($_POST['adresse'])&&strlen($_POST['adresse'])>=5&&preg_match("/^[0-9a-zA-Z-' ]*$/",$_POST['adresse']))// on contrôle que adresse est pas vide et que sa contient au moins 5 ou plus caractére ensuite on contrôle le type de caractére
{

    echo $_POST['adresse'].'<br>';
    
}
else
{
    echo  $_POST['adresse'].' adresse incorrect dois contenir au moins 5 caractéres<br>';
}

//vérification de la ville
if(!empty($_POST['ville'])&&strlen($_POST['ville'])>=1&&preg_match("/^[a-zA-Z-' ]*$/",$_POST['ville']))// j'ai mis un caractére étant donné la ville Y comporte qu'une lettre 
{

    echo  $_POST['ville'].'<br>';
    
}
else
{
    echo $_POST['ville'].' ville incorrect dois contenir au moins 1 caractéres<br>';
}

//vérification du code postal
if(!empty($_POST['cp'])&&strlen($_POST['cp'])>=4&&preg_match("/^[0-9]*$/",$_POST['cp']))// certain code postal belge comporte que 4 chiffres
{
     
    echo  $_POST['cp'].'<br>';
         
}
else
{
    echo  $_POST['cp'].' minimum accepté c\'est 4 chiffres<br>';
}
     
//vérification de l'email
if(!empty($_POST['email'])&&preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$_POST['email']))// code postal belge comporte que 4 chiffres
{
     
    echo  $_POST['email'].'<br>';
         
}
else
{
    echo  $_POST['email'].' adresse email pas correct<br>';
}
     

//vérification mescommande
if(!empty($_POST['mescommandes']))
    {
     
        echo $_POST['mescommandes'].'<br>';
             
    }
    else
    {
        echo  ' vous avez rien séléctionné<br>';
    }
         

//vérification de question
if(!empty($_POST['question'])&&strlen($_POST['question'])>=8&&preg_match("/^[0-9a-zA-Z-' ]*$/",$_POST['question']))// j'ai mis un caractére étant donné la ville Y comporte qu'une lettre 
{

    echo $_POST['question'].'<br>';
    
}
else
{
    echo  $_POST['question'].' est vide ou contient des caractéres non autorisé minimum de caractére 8<br>';
}

//verification d'acceptation CGU
if(isset($_POST['cgu']))
{
echo  'cgu validé<br>';
}else{
    echo 'vous n\'avez pas validé les CGU<br>';
}
$datetime1 = date_create(date('Y-m-d'));
$datetime2 = date_create($_POST['date']);
$interval = date_diff($datetime2,$datetime1);
if(!empty($_POST['date'])&&preg_match("/[0-9]{4}+[-]+[0-9]{2}+[-]+[0-9]{2}/",$_POST['date'])&&$interval->format('%y')>=15&&$interval->format('%y')<=100){
echo $_POST['date'];
    
}else{
    echo 'format de date non valide';
}


?>