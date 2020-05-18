<?php
session_start();
if (!isset($_SESSION["login"]))
{
  die("Nejsi přihlášen! <a href=\"loginForm.php\">Přihlásit se</a>");
}
?>
