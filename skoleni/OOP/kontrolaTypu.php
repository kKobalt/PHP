<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
interface Rozhrani{
	public function povinnaMetoda();
}

class Trida implements Rozhrani{
	public function povinnaMetoda(){
		echo "Já jsem ta metoda, kterou musí implementovat každá třída implementující rozhraní.";
	}
}

class Trida2{
	public function metodaSParametrem(Rozhrani $r){
		$r->povinnaMetoda();
	}
}
$parametr = new Trida();
$instance = new Trida2();
$instance->metodaSParametrem($parametr);
?>
</body>
</html>