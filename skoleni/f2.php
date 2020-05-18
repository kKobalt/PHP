<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="f3.php">
<input type="hidden"  name="krestni" value="<?php echo $_POST["krestni"]; ?>">
Přijmení: <input type="text"  name="prijmeni"><br>
<input type="submit" value="odešli" >
</form>
</body>
</html>
