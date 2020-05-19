<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Tabulka</title>
</head>
<body>
<form action="priklad15.php" method="POST">
Položka: <input type="text" name="polozka">
<input type="submit" value="Vlož">
</form>

<?php

$polozky = isset($_SESSION['polozky']) ? $_SESSION['polozky'] : array();
if (isset($_POST['polozka'])){  
  $polozka = $_POST['polozka'];
  $polozky[count($polozky)] = htmlspecialchars($polozka);
  $_SESSION['polozky'] = $polozky;
}
?>
<br>
<table border="1">
  <tr>
    <th>Položky</th>
  </tr>
<?php
foreach($polozky as $polozka){
?>
  <tr>
    <td><?php echo $polozka; ?></td>
  </tr>
<?php  
}
?>

</table> 
</body>
</html>
