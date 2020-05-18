<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class Trida{
	protected $atribut;
	
	public function __construct(){
		$this->attribut = 0;
	}
	
	public function metoda(){
		echo  "metoda předka " . ++$this->attribut;
		
	}
}

class Potomek extends Trida{
    
	public function metoda(){
		echo  "metoda potomka " . ++$this->attribut;
	}
	
	public function volamUvnitrMetoduPredka(){
		echo "Volám metodu předka. ";
		parent::metoda();
	}
}

$instance = new Trida();
$instance->metoda();
echo "<br>";
$instance2 = new Potomek();
$instance2->metoda();
echo "<br>";
$instance2->volamUvnitrMetoduPredka();
echo "<br>";
?>
</body>
</html>