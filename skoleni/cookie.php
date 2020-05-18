<?php
if (!isset($_COOKIE["citac"])){
	$_COOKIE["citac"] = 0;
}
$citac = $_COOKIE["citac"] + 1;
setcookie("citac", $citac, time() + 300);
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<p>Uz jsi tady byl <?php echo $citac - 1; ?> krát.</p>
</body>
</html>
