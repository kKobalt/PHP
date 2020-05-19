<?php
session_start();

if (empty($_SESSION['counter'])) {createArray();}

function createArray()
{$_SESSION['counter'] = array();}

function emptyArray()
{unset($_SESSION['counter']);}

function ha()
{echo "ha";}
?>

<!DOCTYPE html>
<html lang="cs">
<!--
Vytvořte skript, který bude obsahovat formulář pro vložení textu. Při kliknutí na formulářové tlačítko se přidá nový řádek, který bude obsahovat uživatelem zadaný text do formuláře.
Nápověda: V session mějte pole, které při každém kliknutí zvětšíte o jeden nový prvek – zadaný text. Poté pole uložené v session v cyklu projděte a vygenerujte tabulku.
Může se hodit: metoda vracející počet prvků v poli se jmenuje count.

 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>15: SESSION - Přidávání řádků tabulce</title>
  <style>
  th, tr,td {
    background:#eee;
    padding:5px;
    text-align:center;
  }
  input {
    width: 100px;
    text-align: center;
    margin: 0 10px;
  }
</style>
</head>

<body>
  <form method="POST" action="ukol15.php">
  <input type='text' name='txt' value='text'>
  <input type='submit' name='sub' value='Přidej'>
<?php
// echo "<input type='text' name='txt' value='text'>";
// echo "<input type='submit' name='sub' value='Přidej'>";

if (isset($_POST['txt'])) {

    if ($_POST['txt'] === "00") {
        emptyArray();
        createArray();
    } else {
        array_push($_SESSION['counter'], $_POST['txt']);
    }

    // var_dump($_SESSION['counter']);
    echo "<table style='border:1px dotted grey;'><th>Položka</th>";
    foreach ($_SESSION['counter'] as $key => $value) {
        // prochází pole $_SESSION, ne žádné vlastní
        echo "<tr><td>" . $value . "</td></tr>";
    }
    echo "</table>";
}

?>
      </form>

</body>

</html>