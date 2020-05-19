<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Kalkulačka</title>
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

//Předpokládám, že to budou čísla
echo kalkulacka($_POST['operace'], $_POST['a'], $_POST['b']);
?>
</body>
</html>
