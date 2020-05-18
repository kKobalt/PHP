<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
require 'ns1.php';
require 'ns2.php';
use radimuvprostorjmen\Trida;
use ciziprostorjmen\Trida AS CiziTrida;

$muj = new Trida();
$jeho = new CiziTrida();

echo $muj->metoda() . '<br>';
echo $jeho->metoda() . '<br>';
?>
</body>
</html>