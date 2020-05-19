<html>

<body>
  <style>
    th {
      background: silver;
      padding: 3px;
    }
    tr, td {
      background: #eee;
      padding: 3px;
    }
  </style>
  <table style='border: 1px dotted grey'>
    <tr>
      <th>id</th>
      <th>název</th>
      <th>cena v Kč</th>
      <th>popis</th>
    </tr>

<?php
// echo "<html><body><style>
// th { background: silver; padding: 3px;}
// tr, td { background: #eee; padding: 3px;}
// </style>";
// echo "<table style='border: 1px dotted grey'><tr><th>id</th><th>název</th><th>cena v Kč</th><th>popis</th></tr>";
if (!($con = mysqli_connect("localhost", "eshop", "heslo", "eshop"))) {
    die("Nelze se připojit k databázovému serveru! (mysqli_connet - die)</body></html>");
}
;
mysqli_query($con, "SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT * FROM produkt"))) {
    die("Nelze provést dotaz. (mysqli_query - die)</body></html>");
}
while ($radek = mysqli_fetch_array($vysledek)) {
    echo "<tr><td style='text-align:center'>" . $radek["id_produkt"] . "</td><td>" . $radek["nazev"] . "</td><td>" . $radek["cena"] . "</td><td>" . $radek["popis"], "</td></tr>";
}
?>
</table>

<?php
mysqli_close($con);
// var_dump($con);
?>

<br><a href='./sql08.html'>Zpět</a></body></html>

