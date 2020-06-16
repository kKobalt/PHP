<?php
session_start();

if (empty($_SESSION['userLoggedIn'])) {createArray();}
if (empty($_SESSION['name'])) {createArray();}
if (empty($_SESSION['surname'])) {createArray();}

function createArray()
{$_SESSION['userLoggedIn'] = array();}

// function emptyArray()
// {unset($_SESSION['userLoggedIn']);}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<body>

  <h1> Přihlášení </h1>

  <form action="./prihlaseni.php" method="POST">
    <input type="text" name="login">
    <label for="login">Login Name</label>
    <br>
    <input type="password" name="heslo">
    <label for="heslo">Heslo</label>
    <br>
    <input type="submit" name="submit" value="log in">
  </form>

  <?php
include './menu.php';


// if ($_SERVER['REQUEST_METHOD']=='POST' AND empty($_POST['login']) AND empty($_POST['heslo'])) {
if (empty($_POST['login']) OR empty($_POST['heslo'])) {
 
  echo "<br> Něco chybí vyplnit !!! </br>";
}

else {
  
  // echo "<br> OK! </br>";
  
  // echo htmlspecialchars($_POST["login"]) . "<br>";
  // echo htmlspecialchars($_POST["heslo"]) . "<br>";
  
  if (!($con = mysqli_connect("localhost", "user1", "heslo", "phptest"))) {
    die("Nelze se připojit k databázovému serveru! (die)</body></html>");
  }
  
  // $query = "SELECT * FROM person";
  // příliš mnoho záznamů z db a mnoho práce pro PHP; co nejvíc specifikovat SELECT z db
  // níže se pak nemusí řešit dlouhá IF podmínka 
  
  $query = "SELECT * FROM person WHERE login = '" . $_POST['login'] . "' AND heslo = '" . $_POST['heslo'] . "'";

  if (!($vysledek = mysqli_query($con, $query))) {
    die("Nelze provést dotaz.</body></html>");
}

$found=false;
while ($radek = mysqli_fetch_array($vysledek)) {
  
  // if ($_POST['login'] == $radek["login"] AND $_POST['heslo'] == $radek["heslo"]) {
  if ($vysledek) {
    // echo "<b>" . $radek["login"] . " " . $radek["heslo"] . "</b><br>";}
    // $jmeno = $radek["jmeno"];
    // $prijmeni = $radek['prijmeni'];
    $_SESSION['name'] = $radek['jmeno'];
    $_SESSION['surname'] = $radek['prijmeni'];
    $found=true;
  }}
  
  if ($found == true) {
    
    // $foundTxt = "<br>Zadaný uživatel existuje"; 
    // array_push($_SESSION['userLoggedIn'], $_POST['login']);
    $_SESSION['userLoggedIn'] = $_POST['login'];
    echo "<br> Přihlášen <b>" . $_SESSION['userLoggedIn'] . "</b><br>";
    echo "<a href='./proregistrovane.php'>Pro registrované</a>";

  }
  else {
    
    echo "<br>Špatné přihlašovací údaje";
    
  }
  
  // echo $foundTxt;


  // if (mysqli_query($con,  $query)) {
  //   echo "ok";
  // }
  // else {
  //   echo "Nelze provést dotaz. " . mysqli_error($con);
  // }
  
  // mysql_freeresult($vysledek);
  mysqli_close($con);
  
}




menu();

?>


</body>

</html>