<?php

// $prvek1 = htmlspecialchars($_POST["prvek1"]);
// $prvek2 = htmlspecialchars($_POST["prvek2"]);
// echo $prvek1 + $prvek2;

$p1 = htmlspecialchars($_POST["prvek1"]);
$p2 = htmlspecialchars($_POST["prvek2"]);

switch ($_POST["btn"]) {
    case '+':
        echo $p1 . " + " . $p2 . " = " . ($p1 + $p2);
        break;
    case '-':
        echo $p1 . " - " . $p2 . " = " . ($p1 - $p2);
        break;
    case '*':
        echo $p1 . " * " . $p2 . " = " . ($p1 * $p2);
        break;
    case '/':
        echo $p1 . " / " . $p2 . " = " . ($p1 / $p2);
        break;
    default:
        echo "nic";
        break;
}
