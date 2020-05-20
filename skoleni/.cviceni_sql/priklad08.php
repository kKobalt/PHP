<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if (!($con = mysqli_connect("localhost","eshop","hesloeshop","eshop")))
{
  die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT nazev, popis, cena FROM produkt")))
{
  die("Nelze provést dotaz.</body></html>");
}
?>
<h1>Nabídka</h1>
<?php
while ($radek = mysqli_fetch_array($vysledek))
{
?>
<h2><?php echo $radek["nazev"];?>Kč</h2>
<dl>
	<dt>Cena:</dt>
	<dd><?php echo $radek["cena"];?></dd>
</dl>
<p><?php echo $radek["popis"];?></p>
<?php   
}
mysqli_free_result($vysledek);
mysqli_close($con);
?>
</body>
</head>
