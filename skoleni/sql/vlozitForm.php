<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="vlozeni.php">
<table>
<tr>
  <th>Jméno:</th>
  <td><input type="text" name="jmeno" value="Vaše jméno" ></td> 
</tr>
<tr>
  <th>Email:</th>
  <td><input type="text" name="email" value="@" ></td> 
</tr>
<tr>
  <td colspan="2"><textarea name="data" cols="20" rows="5">Váš příspěvek</textarea></td> 
</tr>
<tr>
  <td><input type="submit" value="Vložit" ></td>
  <td><input type="reset" value="Původní hodnoty" ></td> 
</tr>
</table>
</form>
</body>
</head>
