<?php
session_start();
if (!isset($_SESSION["citac"])) {
    $_SESSION["citac"] = 0;
}
$citac = $_SESSION["citac"] + 1;
$_SESSION["citac"] = $citac;
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
