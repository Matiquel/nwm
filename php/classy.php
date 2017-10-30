<?php
  class Prostokat
  {
    private $a;
    private $b;

    function __construct()
    {
      $this->a = "2";
      $this->b = "4";
    }

    function pole()
    {
      return $this->a*$this->b;
    }

    function obwod()
    {
      return 2*$this->a+2*$this->b;
    }

    function przekatna()
    {
      return sqrt($this->a*$this->a+$this->b*$this->b);
    }
  }

$c1 = new Prostokat();
echo "Pole:".$c1->pole();
echo '<br>';
echo "Obwod:".$c1->obwod();
echo '<br>';
echo "Przekanta:".$c1->przekatna();
 ?>
