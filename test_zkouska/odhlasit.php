<?php
session_start();

// if (empty($_SESSION['userLoggedIn'])) {createArray();}

// function createArray()
// {$_SESSION['userLoggedIn'] = array();}

function emptyArray()
{unset($_SESSION['userLoggedIn']);}
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


echo "<h1> odhlásit </h1>";

// $_SESSION['userLoggedIn'] = $_POST['login'];

if (empty($_SESSION['userLoggedIn'])) {
  echo "Momentálně není nikdo přihlášen <br>";
}

else {
  
  echo "<br> Přihlášený <b>" . $_SESSION['userLoggedIn'] . "</b> byl právě odhlášen<br>";
  emptyArray();
  // echo "<br> Stav sessionu: <b>" . $_SESSION['userLoggedIn'] . "</b><br>";
  
}

echo "<a href='./prihlaseni.php'>Přihlásit se</a>";

die;
include './menu.php';
menu();



?>
</body>

</html>