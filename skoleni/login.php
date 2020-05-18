<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if ($_POST['name'] == 'radim' && $_POST['password'] == 'heslo'){
	$_SESSION["login"] = 1;
	$_SESSION["loginName"] = $_POST['name'];
?>
<p>Úspěšné přihlášení, můžete jít do sekce <a href="proPrihlasene.php"> pro přihlášené</a>.</p>
<?php
} else {
?>
<p>Jméno, nebo heslo je špatné.</p>
<?php
} 
?>
</body>
</html>

