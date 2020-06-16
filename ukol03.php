<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který vygeneruje tabulku s dvěma řádky a deseti sloupci. Jeden řádek bude záhlaví obsahující texty „Položka 1“, „Položka 2“ atd.... a druhý řádek bude obsahovat číslovky 1, 2, 3 …. Ke generování řádků využijte cykly. Nápověda: Jeden cyklus nebude stačit.
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03: Tabulka na šířku</title>
  <style>
  th,
  tr,
  td {
    background: #eee;
    padding: 5px;
    text-align: center;
  }
  </style>
</head>

<body>

  <table>
    <?php

echo "<tr>";
for ($i = 1; $i <= 20; $i++) {
    if ($i <= 10) {   
        echo "<th># $i</th>";}
    elseif ($i == 11) {
        echo "</tr><tr><td>" . intval($i-10) . "</td>";} 
    elseif ($i > 11) {
        echo "<td>" . intval($i-10) . "</td>";} 
    else { echo "";}

}

// echo "<tr>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "<th># $i</th>";
// }
// echo "</tr><tr>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "<td>$i</td>";
// }
// echo "</tr>";
//               ?>

  </table>

</body>

</html>