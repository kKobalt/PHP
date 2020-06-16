<html>
<link rel="stylesheet" href="./sql09.css">

<body>
  <table style='border: 1px dotted grey'>
    <tr>
      <th class="hidden">id</th>
      <th>název</th>
      <th>cena v Kč</th>
      <th>popis</th>
      <th>objednávka</th>
    </tr>

    <?php
if (!($con = mysqli_connect("localhost", "eshop", "heslo", "eshop"))) {
    die("Nelze se připojit k databázovému serveru! (mysqli_connet - die)</body></html>");
}
;
mysqli_query($con, "SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT * FROM produkt"))) {
    die("Nelze provést dotaz. (mysqli_query - die)</body></html>");
}
while ($radek = mysqli_fetch_array($vysledek)) {
    echo "<form action='sql09_objednavka.php' method='POST' name='prod'><tr>
    <td class='hidden'>" . $radek["id_produkt"] . "</td>
    <td>" . $radek["nazev"] . "</td>
    <td class='price'>" . $radek["cena"] . "</td>
    <td>" . $radek["popis"], "</td>
    <td><input type='submit' value='Objednat položku'></td>
    </tr></form>";
}

mysqli_close($con);
// var_dump($con);
?>

  </table>
  <!-- <a href='./sql09.html'>Zpět</a> -->
</body>

</html>