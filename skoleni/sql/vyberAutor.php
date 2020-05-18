<?php
include "fce.php";
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
$jmeno = addslashes($_POST["jmeno"]);
$con = mysqli_connect("localhost", "www", "heslo", "nastenka");
if (!$con)
{
	die("Nelze se připojit do databáze<body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
$dotaz = "SELECT prezdivka, email, data FROM prispevky WHERE prezdivka = '$jmeno'";
if (!($vysledek = mysqli_query($con, $dotaz)))
{
  die("Nelze provést dotaz.</body></html>");
}
?>
<h1>Příspěvky</h1>
<table border="1">
<?php
while ($radek = @mysqli_fetch_array($vysledek))
{
  echo "<tr><th>". htmlspecialchars($radek["prezdivka"]) . "</th><th>". 
  htmlspecialchars($radek["email"]) . "</th></tr>";
  echo "<tr><td colspan=\"2\">" . 
  htmlspecialchars($radek["data"]) . "</td></tr>";
}
mysqli_free_result($vysledek);
mysqli_close($con);
?>
</table>
</body>
</html>
