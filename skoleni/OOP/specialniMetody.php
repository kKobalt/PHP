<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class Trida{
	public function __get($jmeno){
		echo "Někdo chce přečíst $jmeno";
	}
	
	public function __set($jmeno, $hodnota){
		echo "Někdo chce nastavit $jmeno na hodnotu $hodnota";
	}
	
	public function __call($jmeno, $parametry){
		echo "Někdo volá funkci $jmeno s parametry";
		for($i = 0; $i < count($parametry); $i++){
			echo " " . $parametry[$i];
		}
	}
}

$instance = new Trida();
$tmp = $instance->blabla;
echo "<br>";
$instance->bla = 10;
echo "<br>";
$instance->takTohleBudeTezkoExistovat(10, 20, "ahoj");
?>
</body>
</html>