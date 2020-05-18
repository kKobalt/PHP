<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který bude obsahovat formulář pro vložení textu. Při kliknutí na formulářové tlačítko se přidá nový řádek, který bude obsahovat uživatelem zadaný text do formuláře.
Nápověda: V session mějte pole, které při každém kliknutí zvětšíte o jeden nový prvek – zadaný text. Poté pole uložené v session v cyklu projděte a vygenerujte tabulku.
Může se hodit: metoda vracející počet prvků v poli se jmenuje count.

 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>15: Přidávání řádků tabulce</title>
  <style>
  th, tr,td {
    background:#eee;
    padding:5px;
    text-align:center;
  }
  input[type="text"] {
      width: 100px;
      text-align: center;
      margin-left: 15px;
    }
    input[type="submit"] {
      /* width: 100px; */
      text-align: center;
      margin:0 15px;
    }
</style>
</head>

<body>
  <form method="POST" action="ukol15.php">
<?php
$pole = [];
echo count($pole);
echo "<input type='text' name='txt" . (count($pole) + 1) . "' value='text" . (count($pole) + 1) . "'>";
array_push($pole, 'txt' . (count($pole) + 1));
echo "<input type='submit' name='btn' value='Přidej'>";
// echo $pole[0] . " ";
// print_r($pole[0] . " ");
// foreach ($pole as $key => $value) {
//     print_r($key . " ");
// }
echo count($pole);

// print_r($_POST['txt' . $i]);
?>


  </form>



</body>

</html>