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
for($i = 1; $i <= 10; $i++){
?>
	<tr style="color: <?php echo ($i %2 == 0? 'blue' : 'red');?>">
		<td><?php echo $i;?>.</td>
		<td>řádek</td>
	</tr>
<?php
}

//Nebo se barva určí
//if ($i %2 == 0) echo 'blue'; else echo 'red';
?>
</table>
</body>
</html>
