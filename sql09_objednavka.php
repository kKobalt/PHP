<html>

<link rel="stylesheet" href="./sql09.css">

<body>

  <form action="sql09_objednavka.php" method="POST">
  <label for="jmeno">Jméno a příjmení</label>
  <input type="text" name="jmeno" value="Tonda Jetel"><br/>
  <label for="ulice">Adresa</label>
  <input type="text" name="ulice" value="Jiráskova 693"><br/>
  <label for="psc">PSČ</label>
  <input type="text" name="psc" value="69300" maxlength="5" size="3">
  <label for="mesto">Město</label>
  <input type="text" name="mesto" value="Vaňkovo Pletivo"><br/>

  <input type="submit" value="Objednat">
  </form>
  <br /><a href='./sql09.php'>Zpět</a>



</body>

</html>
