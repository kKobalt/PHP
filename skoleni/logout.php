<?php
  session_start();
  unset($_SESSION["login"]);
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<a href="proPrihlasene.php"> pro přihlášené </a>
</body>
</html>
