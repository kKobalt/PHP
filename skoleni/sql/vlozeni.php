<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if (!($con = mysqli_connect("localhost","www","heslo","nastenka")))
{
  die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
if (mysqli_query($con,
"INSERT INTO prispevky(prezdivka, email, data) VALUES('" . 
addslashes($_POST["jmeno"]) . "', '" . 
addslashes($_POST["email"]) . "', '" . 
addslashes($_POST["data"]) . "')"
))
{
  echo "Úspěšně vloženo.";
}
else
{
  echo "Nelze provést dotaz. " . mysqli_error($con);
}
mysqli_close($con);
?>
</body>
</html>
