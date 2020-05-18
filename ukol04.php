<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který vygeneruje tabulku sloužící k rychlému nalezení součinu dvou čísel. Tabulka bude mít rozměr 11 x 11, kde 1, řádek a první sloupec bude záhlaví obsahující čísla 1 – 10. V každé další buňce tabulky pak bude součet čísla v prvním řádku a 1, sloupci.
 -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04: Tabulka Násobky</title>
<style>
  tr, td {
    background:#eee;
    padding:5px;
    text-align:center;
  }

</style>
</head>

<body>

  <table >
  <?php

for ($r = 0; $r <= 10; $r++) {

    echo "<tr>";

    for ($s = 0; $s <= 10; $s++) {
        if ($r == 0 && $s == 0) {
            echo "<th>-</th>";
        } elseif ($r == 0) {
            echo "<th>$s</th>";
        } elseif ($s == 0) {
            echo "<td><b>$r</b></td>";
        } else {
            echo "<td>" . $r * $s . "</td>";
        }
    }
    echo "</tr>";
}

?>
  </table>

</body>

</html>