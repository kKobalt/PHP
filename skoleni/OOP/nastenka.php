<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<h1>Seznam uživatelů</h1>
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=nastenka;', 'www', 'heslo');
    $pdo->query("SET NAMES 'utf8'");
    $vysledek = $pdo->query("SELECT id, prezdivka, email, data FROM prispevky");
?>
<table border="1">
	<tr>		
		<th>Přezdívka</th>
		<th>Email</th>
		<th>Příspěvek</th>
	</tr>
<?php
    foreach($vysledek as $radek){
?>
	<tr>
		<td><?php echo $radek['prezdivka'];?></td>
		<td><?php echo $radek['email'];?></td>
		<td><?php echo $radek['data'];?></td>
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
