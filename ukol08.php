<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte funkci, která bude mít 3 parametry:
1.	Typ aritmetické operace (řetězec / * - +)
2.	První operand
3.	Druhý operand
Funkce vrátí výsledek aritmetické operace. Správné chování funkce ověřte na několika příkladech volání.
 -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>08: Kalkulačka</title>
<style>
  tr, td {
    padding:5px;
    text-align:center;
  }

</style>
</head>

<body>
  <table>

<?php

function operace(string $oper, int $oper1, int $oper2): float
{
    switch ($oper) {
        case '+':
            return $oper1 + $oper2;
            break;
        case '-':
            return $oper1 - $oper2;
            break;
        case '/':
            return $oper1 / $oper2;
            break;
        case '*':
            return $oper1 * $oper2;
            break;
        default:
            return 0;
            break;
    }
}

$a = 100;
$b = 23;

$op = ["+", "-", "*", "/"];

for ($i = 0; $i <= 3; $i++) {
    echo "$a $op[$i] $b: " . operace($op[$i], $a, $b) . "<br>";
}

echo operace('+', 7, 120) . "<br>";
echo operace('-', 3, 185) . "<br>";
echo operace('*', 9, 711) . "<br>";
echo operace('/', 2, 101) . "<br>";

?>

</table>
</body>

</html>