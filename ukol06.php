<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který vygeneruje stejnou tabulku jako v úloze 1, ale text každého sudého řádku bude modrý a text každého lichého řádku bude červený. K obarvení textu použijte CSS, pro jednoduchost se může jednat o inline styl.
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>06: Tabulka s řádky</title>
  <style>
  tr,
  td {
    padding: 5px;
    text-align: center;
  }

  .blue {
    background: #aaf;
  }

  .red {
    background: #faa;
  }
  </style>
</head>

<body>
  <table>

    <?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $barva = "blue";
    } else {
        $barva = "red";
    }
    echo '<tr class="' . $barva . '"><td>' . $i . '</td><td>'. $i . '. řádek</td></tr>';
    /* <tr style="color: <?php echo (%i2==0? 'blue':'red');?>"> */
    }

    ?>

  </table>
</body>

</html>