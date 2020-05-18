<?php
include "faktor.php";
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<table border="1">
<caption>Faktoriál</caption>
<tr>
  <th>N</th>
  <th>N! (iterací)</th>
  <th>N! (rekurzí)</th>
</tr>
<?php
for ($p = 0; $p <= 15; $p++)
{
?>
<tr>
  <td><?php echo $p;?></td>
  <td><?php echo faktorial($p);?></td>
  <td><?php echo faktorial_rek($p);?></td>			     
</tr> 
<?php
}  
?>

</table>
</body>
</html>
