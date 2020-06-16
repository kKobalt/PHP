<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte formulář obsahujících několik prvků typu radiobutton s popiskem nějakého obrázku. Po výběru zobrazte obrázek. Obrázky vezměte z Internetu (vhodné a v souladu s autorským zákonem).

 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>11: Formulář - radiobuttony</title>
  <style>
  img {
    width: 200px;
  }
  </style>

</head>

<body>
  <form method="POST" action="ukol11.php">
    <!-- volá sám sebe -->
    <input type="radio" name="pick" value="pic1">buchta<br>
    <input type="radio" name="pick" value="pic2">pekáč<br>
    <input type="radio" name="pick" value="pic3">kozy<br>
    <input type="submit" value="Vyber">
  </form>
  <br>
  <?php

if (isset($_POST['pick'])) {

    switch ($_POST['pick']) {
        case 'pic1':
            echo '<img src="https://www.albert.cz/-a38173---O-iFC4pd/buchta-papousek" alt="buchta">';
            break;
        case 'pic2':
            echo '<img src="https://im9.cz/iR/importprodukt-orig/8f2/8f2732294c8e0ea3556deebb8cce454f--mmf250x250.jpg" alt="pekáč">';
            break;
        case 'pic3':
            echo '<img src="https://zena-in.cz/media/2017/08/09/koz1.jpg" alt="kozy">';
            break;
        default:
            echo "nic!";
            break;
    }

    ?>


  <?php
}
?>

</body>

</html>