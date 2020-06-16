<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

include './menu.php';
// include './overHeslo.php';
echo "<h1> registrace </h1>";

?>


  <form action="./registrace.php" method="POST">

    <input type="text" name="jmeno" id="">
    <label for="jmeno">jméno</label>
    <br>
    <input type="text" name="prijmeni" id="">
    <label for="prijmeni">příjmení</label>
    <br>
    <input type="text" name="login" id="">
    <label for="login">login name</label>
    <br>
    <input type="password" name="heslo" id="">
    <label for="heslo">heslo</label>
    <br>
    <!-- <input type="password" name="heslo2" id="">
    <label for=" heslo2">ověření hesla</label>
    <br> -->
    <input type="submit" name="submit" value="reg">

  </form>


  <?php

// include './overHeslo.php';


// if ($_POST["jmeno"]!="" AND $_POST["prijmeni"]!="" AND $_POST["login"]!="" AND $_POST["heslo"]!="") {
if (empty($_POST["jmeno"]) OR empty($_POST["prijmeni"]) OR empty($_POST["login"]) OR empty($_POST["heslo"])) {
 
  echo "<br> Něco chybí vyplnit !!! </br>";
}

else {

  echo "<br>";
  // echo htmlspecialchars($_POST["jmeno"]) . "<br>";
  // echo htmlspecialchars($_POST["prijmeni"]) . "<br>";
  // echo htmlspecialchars($_POST["login"]) . "<br>";
  // echo htmlspecialchars($_POST["heslo"]) . "<br>";
  
  // overHeslo();
  
  if (!($con = mysqli_connect("localhost", "user1", "heslo", "phptest"))) {
    die("Nelze se připojit k databázovému serveru! (die)</body></html>");
  }
  ;
  
  mysqli_query($con, "SET NAMES 'utf8'");
  
  if (mysqli_query($con,
  "INSERT INTO person(jmeno, prijmeni, login, heslo) VALUES('" .
  addslashes($_POST["jmeno"]) . "', '" .
  addslashes($_POST["prijmeni"]) . "', '" .
  addslashes($_POST["login"]) . "', '" .
  addslashes($_POST["heslo"]) . "')")) {
    echo "Úspěšně vloženo.";
  } else {
    echo "Nelze provést dotaz. " . mysqli_error($con);
  }
  mysqli_close($con);
  
}
  
  


menu();



?>
</body>

</html>