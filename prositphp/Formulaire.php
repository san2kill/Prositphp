<?php
include "TableauM.php";
//print_r($_POST);

//Cookie
$time = time();

setcookie("username", "Jessy", time()+1000);
//$_SESSION["username"] = "12";

//Verification mot de passe
if(isset($_POST['mdp']) && ($_POST['mdp'] == $tab[0] ))
{
    echo "Bravo ! mot de passe correct !";
}
elseif(isset($_POST['mdp']) && ($_POST['mdp'] == "" ))
{
   echo "Mot de passe vide !"; 
}
elseif(isset($_POST['mdp']) && ($_POST['mdp'] != $tab[0] ))
{
   echo "Mot de passe incorrect !"; 
}


//verification mail
if(isset($_POST['mail']) && ($_POST['mail'] == $tab2[0]))
{
    echo "Email validé!";
}
elseif(isset($_POST['mail']) && ($_POST['mail'] == "" ))
{
   echo "Email vide !"; 
}
elseif(isset($_POST['mail']) && ($_POST['mail'] != $tab2[0] ))
{
   echo "Email incorrect !"; 
}


?>