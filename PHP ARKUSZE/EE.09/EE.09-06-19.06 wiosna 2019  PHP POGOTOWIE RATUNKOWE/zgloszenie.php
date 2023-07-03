<?php
$zespolnr = $_POST["zespolnr"];
$dyspozytornr = $_POST["dyspozytornr"];
$adres = $_POST["adres"];
$kwerenda="INSERT INTO zgloszenia (id, ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) VALUES (NULL, '$zespolnr', '$dyspozytornr', '$adres', 0, CURRENT_TIME());";
$polaczenie = mysqli_connect("localhost", "root", "", "ratownictwo");
$zapytanie = mysqli_query($polaczenie, $kwerenda);
if ($zapytanie) {
    echo "Zgłoszenie dodano do bazy";
} else {
    echo "Błąd podczas dodawania zgłoszenia: " . mysqli_error($polaczenie);
}
mysqli_close($polaczenie);
?>