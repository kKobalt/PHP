<?php 

$jmeno=$_POST["jmeno"];
echo "$jmeno <br>";

$jmenoarea=htmlspecialchars(stripcslashes($jmeno));
echo "$jmenoarea <br>";

?>