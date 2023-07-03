<?php
    $polaczenie=mysqli_connect("localhost", "root", "","wedkowanie-kartawedkarska");
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $adress=$_POST["adress"];
    $query="INSERT INTO karty_wedkarskie SET id='NULL', imie='$name', nazwisko='$surname', adres='$adress', data_zezwolenia='NULL', punkty='NULL';";
    mysqli_query($polaczenie, $query);
    echo "Dodano zgłoszenie";
    mysqli_close($polaczenie);
?>
<!-- DZIAŁA! -->
<!-- (id, imie, nazwisko, adres, data_zezwolenia, punkty) VALUES (NULL, 'Grzegorz', 'Niemczyk', 'Gdynia, Batorego 14/5', '2018-02-23', '0');' -->