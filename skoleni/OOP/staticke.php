<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class Trida{
	public static $pocet = 0;
	
	public function __construct(){
		self::$pocet++;
	}
	
	public function __destruct(){
		self::$pocet--;
	}
}

$instance = new Trida();
$instance2 = new Trida();
echo "Počet instancí " . Trida::$pocet;
?>
</body>
</html>