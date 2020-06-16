<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který bude obsahovat asociativní pole, které inicializujte hodnotami (alespoň 3 prvky). Poté pole projděte cyklem a pro každý prvek vytvořte nadpis (HTML značka H1) obsahující hodnotu klíče a odstavec (HTML značka P) obsahující asociovanou hodnotu.
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>07: Asociativní pole</title>
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

$pole = ["jméno" => "Jan", "příjmeni" => "Novák"];
$pole["věk"] = 25;

foreach ($pole as $key => $value) {
    echo "<h3>$key</h3><p>$value</p>";
}

?>

  </table>
</body>

</html>