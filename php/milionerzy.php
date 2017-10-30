<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="utf-8">
</head>
<body>
<div class="container">
<?php
  include 'Pytanie.class.php';
  include 'DodajPytania.php';
  include 'wygrane.php';
  if(!isset($_REQUEST['poziom'])) {
   $poziom = 1;
  } else  {
   $poziom = $_REQUEST['poziom']+1;
  }
  if (isset($_REQUEST['odpowiedz'])) {
   $odpowiedz = $_REQUEST['odpowiedz'];
   $numerPytania = $_REQUEST['numerPytania'];
   //echo 'Na poprzednie pytanie odpowiedziales '.$odpowiedz.'<br>';
    if($pytania[$numerPytania]->sprawdzOdpowiedz($_REQUEST['odpowiedz'])) {
      //echo 'Jest to prawidłowa odpowiedz<br>';
    }
    else {
      //przegrana - progi
      if ($poziom > 2 && $poziom <= 7) {
        echo 'Wygrałeś/aś 1000zł<br>';
    } else if($poziom > 7){
      echo 'Wygrałeś/aś 40000zł<br>';
    }
      exit();
    }
  } else $poziom = 1;
  echo '<div class="pytanie">';
  echo 'Pytanie za '.$wygrane[$poziom].' zł';
  echo '</div>';
  $numerPytania = rand(0,2);
  echo '<form action="milionerzy.php" method="get">';
  echo '<div class="milio">';
  echo $pytania[$numerPytania]->wyswietlPytanie();
  echo '<input type="hidden" name="numerPytania" value="'.$numerPytania.'">';
  echo '<input type="hidden" name="poziom" value="'.$poziom.'">';
  echo '</div>';
  echo '<input type="submit" value="Definitywnie">
  </form>';
?>
</div>
</body>
</html>
