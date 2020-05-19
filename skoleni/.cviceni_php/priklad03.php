<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Tabulka</title>
</head>
<body>
<table border="1">
	<tr>		
<?php
$celkem = 10;
for($i = 1; $i <= $celkem; $i++){
?>
	
		<th>Položka <?php echo $i;?></th>			
<?php
}
?>
	</tr>
	<tr>
<?php 
for($i = 1; $i <= $celkem; $i++){
?>
		<td><?php echo $i;?>.</td>		
<?php
} 
?>
	</tr>
</table>
</body>
</html>
