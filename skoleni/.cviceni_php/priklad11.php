<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Obrázky</title>
</head>
<body>
<form action="priklad11.php" method="POST">
<ul>
  <li><input type="radio" name="obr" value="logo"> Logo VŠB</li>
  <li><input type="radio" name="obr" value="areal"> Areál VŠB</li>
</ul>
<input type="submit" value="Zobraz">
</form>
<?php
if (isset($_POST['obr']) && $_POST['obr'] == 'logo'){
?>
<img src="http://kurzy.vsb.cz/images/znak_new.png"/>
<?php
} 
if (isset($_POST['obr']) && $_POST['obr'] == 'areal') {
?>
<img src="http://kurzy.vsb.cz/images/areal1.jpg"/>
<?php
}
?>
</body>
</html>
