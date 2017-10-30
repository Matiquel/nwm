<?php
class Czlowiek
{
  public $imie;
  private $nazwisko;
  public $pesel;
  public $adres;

  function __construct()
  {
    $this->imie = "";
    $this->nazwisko = "";
    $this->pesel = "";
    $this->adres = "";
  }
  function ustaw($i, $n, $p, $a)
  {
    $this->imie = $i;
    $this->nazwisko = $n;
    $this->pesel = $p;
    $this->adres = $a;
  }
  function in() {
    return $this->imie . " " . $this->nazwisko;
  }
  function zmienNazwisko($noweNazwisko)
  {
    $this->nazwisko = $noweNazwisko;
  }
}

$c1 = new Czlowiek();
$c2 = new Czlowiek();
$c2->ustaw("Jan", "Kowalski", "00000000000","Warszawa, Główna 12");

echo $c2->in();
echo '<br>';

//echo '<pre>';
//var_dump($c2);
echo $c2->adres."<br>";
$c3 = $c2;
$c2->adres = "Gdańsk,Klonowa 15";
echo "Adres c2:".$c2->adres."<br>";
echo "Adres c3:".$c3->adres."<br>";

$c2->zmienNazwisko("Nowak");
echo $c2->in();
?>
