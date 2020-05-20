<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Seznam</title>
</head>
<body>
<ol>
<?php
for($i = 1; $i <= 10; $i++){
?>
	<li>Prvek <?php echo $i;?></li>	
<?php
}
?>
</ol>
</body>
</html>
