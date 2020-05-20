<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Tabulka</title>
</head>
<body>
<?php
$celkem = 10;
?>
<table border="1">
	<tr>
		<th>&nbsp;</th>			
<?php
$celkem = 10;
for($sloupec = 1; $sloupec <= $celkem; $sloupec++){
?>
		<th><?php echo $sloupec;?></th>
<?php 
}
?>
	</tr>

<?php 
for($radek = 1; $radek <= $celkem; $radek++){
?>
	<tr>
<?php
	for($sloupec = 0; $sloupec <= $celkem; $sloupec++){
		if ($sloupec == 0){
?>
		<th><?php echo $radek;?></th>			
<?php
		}
		else{
?>
		<td><?php echo $radek * $sloupec;?></td>			
<?php

		}
	}
}
?>
	</tr>
</table>
</body>
</html>
