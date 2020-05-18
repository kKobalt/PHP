<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který obdobně jako v příkladu 1 vytvoří tabulku, ale oproti příkladu 1 bude počet řádků zadán uživatelem do formuláře.

 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>13: Dynamický počet řádků</title>
  <style>
  th, tr,td {
    background:#eee;
    padding:5px;
    text-align:center;
  }
  input[type="text"] {
      width: 40px;
      text-align: center;
    }
</style>
</head>

<body>
  <!-- <form method="POST" action="zpracuj12.php"> -->
  <form method="POST" action="ukol13.php" onclick="ukol13.php">
    <input name="pocet" type="text" value="15">
    <input name="btn" type="submit" value="Počet řádků tabulky">
  </form>

<?php
if (isset($_POST["pocet"])) {
    echo " <table> <tr> <th>#</th> <th>$</th> </tr>";
    for ($i = 1; $i <= $_POST["pocet"]; $i++) {
        echo "<tr><td>$i</td><td>řádek</td></tr>";
    }
}
?>
  </table>


</body>

</html>