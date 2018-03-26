<?php 
include "Formulaire.php"
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
</head>

<body>
    <h1> Login </h1>
    <form method="POST" action="index.php">
        <input type="email" name="mail" placeholder="Votre email "/>
        <input type="password" name="mdp" placeholder="Mot de passe "/>
        <input type="submit" value="Valider !" />
    </form>
    <br />
<?php
echo $_COOKIE["username"];

?>

</body>

</html>