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

$instance = new Trida();
$instance->povinnaMetoda();
?>
</body>
</html>