<?php
function faktorial($n)
{
  $vysledek = 1;
  if ($n <= 1)
  {
    return 1;
  }
  for($temp = 2; $temp <= $n; $temp++)
  {
    $vysledek *= $temp;
  }
  return $vysledek;
}

function faktorial_rek($n)
{
  if ($n <= 1)
  {
    return 1;
  }
  else
  {
    return $n * faktorial_rek($n - 1);
  }
}

function menu()
{
  echo "<ul><li>Registrace</li>";
  echo "<li>Pro registrované</li>";
  echo "<li>Odhlásit se</li></ul>";
}


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
