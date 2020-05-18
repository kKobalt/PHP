<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>

<?php
$a = 10;
do
{
  if ($a == 5)
  {
    continue;
  }
  if ($a == 2)
  {
    break;
  }
  echo "$a<br>";
} while (--$a > 0);
?>

</body>
</html>
