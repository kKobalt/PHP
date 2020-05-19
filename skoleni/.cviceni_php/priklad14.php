<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Selectbox</title>
</head>
<body>
<?php
$volby = array('volba1' => 'Jednička', 'volba2' => 'Dvojka', 'volba3' => 'Trojka')
?>
<form action="priklad14a.php" method="POST">
<select name="volby">
<?php
foreach($volby as $hodnota => $titulek){
?>
  <option value="<?php echo $hodnota;?>"><?php echo $titulek;?></option>
<?php
}
?>
</select>
<input type="submit" value="Dále" >
</form>
</body>
</html>
