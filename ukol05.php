<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který vygeneruje číslovaný seznam (HTML značky OL / LI), kde prvky seznamu budou řetězce „Prvek 1“, „Prvek 2“, atd ...
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05: Seznam</title>
  <style>
  tr,
  td {
    background: #eee;
    padding: 5px;
    text-align: center;
  }
  </style>
</head>

<body>

  <ol>
    <?php

for ($r = 1; $r <= 10; $r++) {
    echo "<li> Prvek " . $r . "</li>";
}

?>
  </ol>

</body>

</html>