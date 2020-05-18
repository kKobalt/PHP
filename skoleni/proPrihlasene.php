<?php
include"kontrola.php";
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<p>Stránka jen pro přihlášené. 
Uživatel: 
<?php 
  if (isset($_SESSION["loginName"])){
    echo $_SESSION["loginName"];
  }
?>
<a href="logout.php"> odhlásit </a>
</p>
</body>
</html>

