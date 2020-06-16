<?php
session_start();

// if (empty($_SESSION['userLoggedIn'])) {createArray();}

// function createArray()
// {$_SESSION['userLoggedIn'] = array();}

// function emptyArray()
// {unset($_SESSION['userLoggedIn']);}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php


echo "<h1> pro registrované </h1>";
include './menu.php';


if (empty($_SESSION['userLoggedIn'])) {
  echo "Momentálně není nikdo přihlášen <br>";
  echo "<a href='./prihlaseni.php'>Přihlásit se</a>";
  die ;

}

else {

// echo "<br> Přihlášen je <b>" . $_SESSION['userLoggedIn'] . "</b><br>";
echo "<br> Přihlášen je <b>" . $_SESSION['userLoggedIn'] . "</b> (" . $_SESSION['name'] . " " . $_SESSION['surname'] . ")<br>";
// echo "<br> Přihlášen je <b>" . $_SESSION['userLoggedIn'] . "</b>" . $jmeno . " " . $prijmeni . "<br>";
echo "<a href='./odhlasit.php'>Odhlásit se</a><br><br>";

echo "Text POUZE pro přihlášené";

// echo "<br> Přihlášený <b>" . $_SESSION['userLoggedIn'] . "</b> byl právě odhlášen<br>";
// emptyArray();

}



menu();


?>
</body>

</html>