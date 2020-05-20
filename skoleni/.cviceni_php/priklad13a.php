<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Tabulka</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Pořadí</th>
		<th>Něco</th>
	</tr>
<?php
for($i = 1; $i <= $_POST['pocet']; $i++){
?>
	<tr>
		<td><?php echo $i;?>.</td>
		<td>řádek</td>
	</tr>
<?php
}
?>
</table>
</body>
</html>
