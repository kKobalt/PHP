<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Texty z pole</title>
</head>
<body>
<?php
$pole = array('Nadpis' => 'Nějaký text k nadpisu', 'Jiný adpis' => 'Nějaký text k jinému nadpisu', 'Závěr' => 'Co říct závěrem? Že nám to funguje.');
foreach($pole as $nadpis => $odstavec){
?>
<h1><?php echo $nadpis;?></h1>
<p><?php echo $odstavec;?></p>		
<?php
}
?>
</body>
</html>
