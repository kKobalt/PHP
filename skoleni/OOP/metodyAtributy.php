<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
$atribut = 10;

class Trida{
	
	private $atribut;
	
	public function nastavAtribut($novaHodnota){
		$this->atribut = $novaHodnota;
	}
	
	public function vratAtribut(){
		return $this->atribut;
	}
	
	public function konfliktJmen($atribut){		
		global $atribut;		
		$this->atribut = $atribut;
	}
}

$instance = new Trida();
$instance->nastavAtribut(5);
echo "Atribut " . $instance->vratAtribut() . "<br>";
$instance->konfliktJmen(30);
echo "Atribut " . $instance->vratAtribut() . "<br>";
?>
</body>
</html>