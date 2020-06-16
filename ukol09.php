<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte funkci, která vytvoří prvních N prvků aritmetické posloupnosti (uložených v poli). Funkce bude mít 3 parametry:
1.	První prvek posloupnosti
2.	Difference (rozdíl mezi prvky)
3.	Počet prvků
Pro připomenutí, posloupnost o 4 prvcích s 1. prvkem 2 a differencí 5 je: 2, 7, 12, 17. Správné chování funkce ověřte na několika příkladech volání (a výpisem pole v cyklu).
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>09: Aritmetická posloupnost</title>
  <style>
  tr,
  td {
    padding: 5px;
    text-align: center;
  }
  </style>
</head>

<body>
  <table>

    <?php
$pole = [];

function operace(int $first, int $diff, int $count)
{
    $p = [];
    for ($i = 0; $i <= $count - 1; $i++) {
        $p[$i] = $first + $diff * $i;
    }
    return $p;
}

foreach (operace(10, 2, 15) as $prvek) {
    echo $prvek . "<br>";
}

?>

  </table>
</body>

</html>