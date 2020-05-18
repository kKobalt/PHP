<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který vygeneruje tabulku s dvěma sloupci (dodejte jim nějaké záhlaví) a deseti řádky, kde v každém řádku bude v prvním sloupci pořadové číslo řádků a ve druhém slovo řádek. Ke generování řádků využijte cyklus.
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01: Tabulka Cykly</title>
<style>
  th, tr,td {
    background:#eee;
    padding:5px;
    text-align:center;
  }
</style>
</head>

<body>

  <table>
    <tr>
      <th>#</th>
      <th>$</th>
    </tr>
  <?php

for ($i = 1; $i <= 10; $i++) {
    echo "<tr><td>$i</td><td>řádek</td></tr>";
}

?>

  </table>

</body>

</html>