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
$i = 0;
while($i++ < 10){
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
