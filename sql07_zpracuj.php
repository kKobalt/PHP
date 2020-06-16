<?php

// echo $_POST['nazev'] . "<br>";
// echo $_POST['cena'] . "<br>";
// echo $_POST['popis'] . "<br>";

if (!($con = mysqli_connect("localhost", "eshop", "heslo", "eshop"))) {
    die("Nelze se připojit k databázovému serveru! (die)</body></html>");
}
;

mysqli_query($con, "SET NAMES 'utf8'");

if (mysqli_query($con,
    "INSERT INTO produkt(nazev, cena, popis) VALUES('" .
    addslashes($_POST["nazev"]) . "', '" .
    addslashes($_POST["cena"]) . "', '" .
    addslashes($_POST["popis"]) . "')")) {
    echo "Úspěšně vloženo.";
} else {
    echo "Nelze provést dotaz. " . mysqli_error($con);
}
mysqli_close($con);

echo "<br><a href='./sql07.html'>Zpět</a>";

// var_dump($con);