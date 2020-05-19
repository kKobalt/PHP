<?php

echo $_POST['nazev'] . "<br>";
echo $_POST['cena'] . "<br>";
echo $_POST['popis'] . "<br>";

$con = mysqli_connect("localhost", "eshop", "heslo", "eshop");

var_dump($con);
