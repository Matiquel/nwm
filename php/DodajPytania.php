<?php
$pytania = Array();
$pytanie = new Pytanie();
$pytanie->ustawTresc("Czy woda jest mokra?");
$pytanie->dodajOdpowiedz('a','Tak');
$pytanie->dodajOdpowiedz('b','Nie');
$pytanie->dodajOdpowiedz('c','Nie pamiętam');
$pytanie->dodajOdpowiedz('d','Nie wiem ale się domyślam');
$pytanie->poprawnaOdpowiedz('d');
array_push($pytania, $pytanie);
$pytanie = new Pytanie();
$pytanie->ustawTresc("Dokąd nocą tupta jeż?");
$pytanie->dodajOdpowiedz('a','Do tebu');
$pytanie->dodajOdpowiedz('b','Do kina');
$pytanie->dodajOdpowiedz('c','Nigdzie');
$pytanie->dodajOdpowiedz('d','Na miszora');
$pytanie->poprawnaOdpowiedz('a');
array_push($pytania, $pytanie);
$pytanie = new Pytanie();
$pytanie->ustawTresc("W którym roku miał miejsce chrzest polski?");
$pytanie->dodajOdpowiedz('a','1410');
$pytanie->dodajOdpowiedz('b','Wczoraj');
$pytanie->dodajOdpowiedz('c','966');
$pytanie->dodajOdpowiedz('d','Kiedyś');
$pytanie->poprawnaOdpowiedz('c');
array_push($pytania, $pytanie);
?>
