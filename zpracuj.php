<?php 

$name1=htmlspecialchars($_POST["jmeno1"]); // nahradí spec. HTML znaky (<, ", >...) do entit
$name2=htmlspecialchars($_POST["jmeno2"]);
// $name1=$_POST["jmeno1"];
// $name2=$_POST["jmeno2"];

echo "<b>$name1 + $name2</b>";



?>