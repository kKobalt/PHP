<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Aritmetická posloupnost</title>
</head>
<body>
<?php
function posloupnost(int $a, int $diff, int $n) : array {
	$vysledek = array();
  for($i = 0; $i < $n; $i++, $a += $diff){
    $vysledek[$i] = $a;
  }
  return $vysledek;
}
?>

<p>(1, 5, 10) =>
<?php
foreach(posloupnost(1, 5, 10) as $prvek){
  echo "$prvek ";
}
?>
</p>

<p>(6, 1, 15) =>
<?php
foreach(posloupnost(6, 1, 15) as $prvek){
  echo "$prvek ";
}
?>
</p>

<p>(100, 150, 15) =>
<?php
foreach(posloupnost(100, 150, 15) as $prvek){
  echo "$prvek ";
}
?>
</p>


</body>
</html>
