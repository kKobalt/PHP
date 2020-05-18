<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
require 'ns1.php';
require 'ns2.php';

$muj = new radimuvprostorjmen\Trida();
$jeho = new ciziprostorjmen\Trida();

echo $muj->metoda() . '<br>';
echo $jeho->metoda() . '<br>';

?>
</body>
</html>