<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>

<?php
// foreach přes "normální" pole
$pole = array(10, 1, 25, 30);
foreach ($pole as $prvek){
  echo "$prvek<br>";
}

// foreach přes "asociativní" pole
$asocPole = array("Jméno" => "Radim", "Příjmení" => "Dostál");
foreach ($asocPole as $klic => $hodnota){
	echo "V poli je pro klíč $klic přiřazena hodnota $hodnota<br>";
}
?>

</body>
</html>
