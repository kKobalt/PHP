<?php


function overHeslo () {


$heslo1 = htmlspecialchars($_POST["heslo"]);
$heslo2 = htmlspecialchars($_POST["heslo2"]);

echo $heslo1 . "<br>" . $heslo2;


  // echo "<br>";
  // echo "<ul>";
  // echo "<li><a href='./registrace.php'>Registrace</a></li>";
  // echo "<li><a href='./proregistrovane.php'>Pro registrované</a></li>";
  // echo "<li><a href='./odhlasit.php'>Odhlásit se</a></li>";
  // echo "</li>";
   
  }


?>