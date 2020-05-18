<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class Trida{
	public function __construct(){
		echo "Někdo vytváří instanci";
	}
	
	public function __destruct(){
		echo "Instance končí";
	}
}

$instance = new Trida();
?>
<br/>
</body>
</html>