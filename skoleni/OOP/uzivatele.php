<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<h1>Seznam uživatelů</h1>
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=priklad;', 'www', 'heslo');
    $pdo->query("SET NAMES 'utf8'");
    $vysledek = $pdo->query("SELECT id_uzivatele, jmeno, prijmeni, login FROM uzivatele");
?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Login</th>
		<th>Jméno</th>
		<th>Přijmení</th>
	</tr>
<?php
    foreach($vysledek as $radek){
?>
	<tr>
		<td><?php echo $radek['id_uzivatele'];?></td>
		<td><?php echo $radek['login'];?></td>
		<td><?php echo $radek['jmeno'];?></td>
		<td><?php echo $radek['prijmeni'];?></td>
	</tr>
<?php
    }
?>
</table>
<?php   
} catch (PDOException $e) {
    echo 'Mysql problém: ' . $e->getMessage();
}
?>

</body>
</html>
