<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja wszystkie smaki</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </header>
    <main>
        <section id="lewy">
            <img src="menu-scaled.jpg" alt="nasze danie">
        </section>
        <section id="prawy">
            <h4>U nas dobrze zjesz!</h4>
            <ol>
                <li>Obiady od 40 zł</li>
                <li>Przekąski od 10 zł</li>
                <li>Kolacja od 20 zł</li>
            </ol>
        </section>
    </main>
    <section id="dolny">
        <h2>Zarezerwuj stolik on-line</h2>
        <?php
            $data = $_POST["data"];
            $ilosc = $_POST["ilosc"];
            $numer = $_POST["numer"];
            if (!empty($data) && !empty($ilosc) && !empty($numer)) {
                echo "Dodano rezerwację do bazy";
                $kwerenda = "INSERT INTO rezerwacje SET data_rez='$data', liczba_osob='$ilosc', telefon='$numer';";
                $polaczenie = mysqli_connect("localhost", "root", "", "restauracja");
                mysqli_query($polaczenie, $kwerenda);
                mysqli_close($polaczenie);
            }
        ?>
        <form action="" method="post">
            Data (format rrrr-mm-dd):
            <br>
            <input type="text" name="data">
            <br>
            Ile osób?
            <br>
            <input type="number" name="ilosc">
            <br>
            Twój numer telefonu:
            <br>
            <input type="text" name="numer">
            <br>
            <input type="checkbox" name="zgoda">Zgadzam się na przetwarzanie moich danych osobowych
            <br>
            <button type="reset">WYSZYŚĆ</button>
            <button type="submit">REZERWUJ</button>
        </form>
    </section>
    <footer>
        Stronę internetową opracował: <i>00000000011</i>
    </footer>
</body>
</html>