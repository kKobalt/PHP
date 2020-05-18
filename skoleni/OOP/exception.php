<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class OperaceDeleni{
	public function deleno($delenec, $delitel){
		if ($delitel == 0){
			throw new Exception("Nulou nedělíme");
		}
		return $delenec / $delitel;
	}
}

try{
	$kalkulacka = new OperaceDeleni();
	echo " 10 / 4 = " . $kalkulacka->deleno(10, 4) . "<br>";
	echo " 100 / 0 = " . $kalkulacka->deleno(100, 0) . "<br>";
}
catch (Exception $e){
	echo $e->getMessage();
}
?>
</body>
</html>