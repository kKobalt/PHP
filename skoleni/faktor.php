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
    return $n * faktorial($n - 1);
  }
}

?>
