<?php
// tworzymy tablice która będzie zawierała wszystkie osoby
$osoby = array();

// przepisujemy dane do wspolnej tablicy
$osoby['imiona'] = $_POST['imie'];
$osoby['nazwiska'] = $_POST['nazwisko'];

// wypisujemy tablicę zawierającą wszystkie osoby
$wynik = print_r($osoby,true);
echo "<pre>$wynik</pre>";
?>