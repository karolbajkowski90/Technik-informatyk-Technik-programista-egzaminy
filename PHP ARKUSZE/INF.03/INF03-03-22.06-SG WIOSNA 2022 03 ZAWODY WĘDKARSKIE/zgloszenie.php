<?php
    $idlowiska = $_POST["id"];
    $date = $_POST["date"];
    $judge = $_POST["judge"];
    $kwerenda = "INSERT INTO zawody_wedkarskie (id, Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (NULL, 0, '$idlowiska', '$date', '$judge');";
    $polaczenie = mysqli_connect("localhost", "root", "", "wedkarstwo");
    mysqli_query($polaczenie, $kwerenda);
    echo "Dodano zgłoszenie zawodów";
    mysqli_close($polaczenie);
?>