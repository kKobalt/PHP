<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
class PrvniTrida{
	public function prvniMetoda(){
		echo "Ahoj světe";
	}
}

$instance = new PrvniTrida();
$instance->prvniMetoda();
?>
</body>
</html>