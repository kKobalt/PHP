<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte formulář pro zadání dvou čísel a jedním tlačítkem. Po stisknutí na tlačítko zadaná čísla sečtěte. Pro jednoduchost předpokládejte, že do formuláře budou vždy zadána čísla a ne obecně znaky.

 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10: Formulář pro součet</title>
  <style>
  input[type="text"] {
    width: 40px;
    text-align: center;
  }
  </style>
</head>

<body>
  <form method="POST" action="ukol10.php">
    <input type="text" name="prvek1" value=8> +
    <input type="text" name="prvek2" value=5>
    <input type="submit" name="btn" value="=">

  </form>

  <?php

if (isset($_POST['prvek1']) && isset($_POST['prvek2'])) {
    echo htmlspecialchars($_POST['prvek1']) . " + " . htmlspecialchars($_POST['prvek2']) . " = " . (htmlspecialchars($_POST["prvek1"]) + htmlspecialchars($_POST["prvek2"]));
} else {
    echo "";
}

?>


</body>

</html>