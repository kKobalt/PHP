<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class Trida{
	const konstanta = 10;
	
	public function metoda(){
		echo  "Konstanta " . self::konstanta;
	}
}

$instance = new Trida();
$instance->metoda();
echo "<br/>Nebo jinak " . Trida::konstanta;
?>
</body>
</html>