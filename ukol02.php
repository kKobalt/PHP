<!DOCTYPE html>
<html lang="en">
<!--
Upravte příklad číslo 1 tak, aby se použil jiný druh cyklu.
 -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02: Tabulka Cykly 2</title>
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

// $a=1;
// do {
//   echo "<tr><td>$a</td><td>řádek</td></tr>";
// } while (++$a <= 10);

$a = 0;
while (++$a <= 10) {
 echo "<tr><td>$a</td><td>řádek</td></tr>";
}
;

?>

  </table>

</body>

</html>