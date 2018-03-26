echo "Hello World !";
?>

<?php
$myString = "Hello World !";

echo $myString.'<hr>' //On met un point pour concatainer la balise html nous permettant de souligner
?>

<?php
$String1 = "Je suis allée ";
$String2 = "au cinema ";
$String3 = "et a la piscine ";

$String4 = $String1;
$String4 .= $String2; // Permet d'ajouter String2  a String1
echo $String4 .= $String3;


?>

<?php
echo "echo <br>$String4 avec Jacques et Marie "; //Affiche les String4 + le text

?>