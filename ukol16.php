<?php

abstract class GeometrickyObjekt
{
    abstract protected function spoctiObvod(): int;
}

class Ctverec extends GeometrickyObjekt
{
    private $a;
    public function __construct(int $a)
    {
        $this->a = $a;
    }
    public function spoctiObvod(): int
    {
        return 2 * $this->a;
    }
}

class Obdelnik extends GeometrickyObjekt
{
    private $a, $b;
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function spoctiObvod(): int
    {
        return 2 * $this->a + 2 * $this->b;
    }
}

class Trojuhelnik extends GeometrickyObjekt
{
    private $a, $b, $c;
    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function spoctiObvod(): int
    {
        return $this->a + $this->b + $this->c;
    }
}
?>


<!DOCTYPE html>
<html lang="cs">
<!--
Vytvořte abstraktní třídu GeometrickyObjekt s abstraktní metodou spoctiObvod, která je bez parametrů a vrazí číslo. Poté vytvořte neabstraktní potomky:
1.	Ctverec
2.	Obdelnik
3.	Trojuhelnik
A každé třídě doplňte potřebné atributy (délky stran, poloměr atd...). Každá ze trojce neabstraktních tříd bude mít konstruktor, kde se všechny atributy zadají. Poté implementujte zděděnou metodu pro výpočet obvodu.
Pro ověření funkčnosti:
1.	Vytvořte několik instancí každé třídy
2.	Uložte je do pole
3.	V cyklu pole projděte a vypište výsledek metody spoctiObvod
-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>16: Abstarktní třída</title>
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
  input[type="submit"] {
    width: 250px;
    text-align: center;
    margin: 0 10px;
  }
</style>
</head>

<body>


<?php

$insta_ctverec = new Ctverec(10);
$insta_obdelnik = new Obdelnik(10, 20);
$insta_trojuhelnik = new Trojuhelnik(10, 20, 30);

$pole = [];
array_push($pole, $insta_ctverec->spoctiObvod(), $insta_obdelnik->spoctiObvod(), $insta_trojuhelnik->spoctiObvod());

foreach ($pole as $key => $value) {
    echo $key . ": " . $value . "<br/>";
}

// echo "čtverec: " . $insta_ctverec->spoctiObvod() . "<br/>";
// echo "obdélník: " . $insta_obdelnik->spoctiObvod() . "<br/>";
// echo "trojúhelník: " . $insta_trojuhelnik->spoctiObvod() . "<br/>";
?>

</body>

</html>