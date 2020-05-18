<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if (isset($_POST['rozdil'])){
  echo $_POST["a"] - $_POST["b"];
}
if (isset($_POST['soucet'])){
  echo $_POST["a"] + $_POST["b"];
}
?>
</body>
</head>