<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if (!($con = mysqli_connect("localhost", "eshop", "heslo", "eshop"))) {
    die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con, "SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT id_produkt, nazev, popis, cena FROM produkt"))) {
    die("Nelze provést dotaz.</body></html>");
}
?>
<h1>Nabídka</h1>
<?php
while ($radek = mysqli_fetch_array($vysledek)) {
    ?>
<h2><?php echo $radek["nazev"]; ?></h2>
<dl>
	<dt>Cena:</dt>
	<dd><?php echo $radek["cena"]; ?> Kč</dd>
</dl>
<p><?php echo $radek["popis"]; ?></p>
<form method="POST" action="sql09_objednavka_rk.php">
	<input type="hidden" name="produktId" value="<?php echo $radek["id_produkt"]; ?>">
	<input type="submit" value="Objednat">
</form>
<?php
}
mysqli_free_result($vysledek);
mysqli_close($con);
?>
</body>
</head>