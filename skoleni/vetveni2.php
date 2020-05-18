<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>

<?php
$a = 1;
echo "$a";
switch ($a)
{
 case 1 : echo "kus"; break;
 case 2 :
 case 3 :
 case 4 : echo "kusy"; break;
 default : echo "kusù"; break;
}

?>

</body>
</html>
