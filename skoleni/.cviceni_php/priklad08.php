<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Funkce kalkulačka</title>
</head>
<body>
<?php
function kalkulacka(string $typ, int $a, int $b) : float {
	switch ($typ){
		case '+' : return $a + $b;
		case '-' : return $a - $b;
		case '/' : if ($b == 0) return 0; else return $a / $b;
		case '*' : return $a * $b;
		default	 : return 0;
	}
}
?>
kalkulacka('+', 1, 2) = <?php echo kalkulacka('+', 1, 2);?><br>
kalkulacka('+', 10, 12) = <?php echo kalkulacka('+', 10, 12);?><br>

kalkulacka('-', 1, 2) = <?php echo kalkulacka('-', 1, 2);?><br>
kalkulacka('-', 10, 12) = <?php echo kalkulacka('-', 10, 12);?><br>

kalkulacka('*', 1, 2) = <?php echo kalkulacka('*', 1, 2);?><br>
kalkulacka('*', 10, 12) = <?php echo kalkulacka('*', 10, 12);?><br>

kalkulacka('/', 1, 2) = <?php echo kalkulacka('/', 1, 2);?><br>
kalkulacka('/', 10, 12) = <?php echo kalkulacka('/', 10, 12);?><br>

</body>
</html>
