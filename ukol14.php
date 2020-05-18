<!DOCTYPE html>
<html lang="en">
<!--
Vytvořte skript, který bude obsahovat asociativní pole, které inicializujte hodnotami (alespoň 3 prvky). Poté vytvořte formulář obsahující HTML formulářový prvek „selectbox“, kde počet voleb (HTML značky OPTION) bude roven počtu prvků v poli, každá hodnota (atribut VALUE HTML značky OPTION) bude klíč asociativního pole a každý popisek (obsah HTML značky OPTION) bude hodnota v asociativním poli. Jednotlivé volby (HTML značky OPTION) generujte v cyklu.
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>14: Dynamicky generovaný obsah výběrového pole</title>
  <style>
  th, tr,td {
    background:#eee;
    padding:5px;
    text-align:center;
  }
  select {
      width: 100px;
      text-align: center;
    }
</style>
</head>

<body>
  <form method="POST" action="ukol14.php">

<?php
$pole = ["jméno" => "Jan", "příjmení" => "Novák", "věk" => 25, "výška" => 186];
// echo count($pole);
?>

<select name="selectbox" id="selectbox">

<?php
foreach ($pole as $key => $value) {
    echo "<option value='" . $key . "'>" . $value . "</option>";
}

?>
  </select>
  <input type="submit" name="btn">
  </form>

<?php
if (isset($_POST['btn'])) {
    echo "<b>" . $_POST["selectbox"] . " </b> je <b>" . $pole[$_POST["selectbox"]] . "</b> (key->value)";
}

?>


</body>

</html>