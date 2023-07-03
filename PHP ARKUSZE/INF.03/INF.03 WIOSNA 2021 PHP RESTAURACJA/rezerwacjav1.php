<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Restauracja wszystkie smaki</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Witamy w restauracji "Wszystkie smaki"</h1>
    </header>
    <main>
        <section class="left">
            <img src="menu-scaled.jpg" alt="Nasze danie">
        </section>
        <section class="right">
            <h4>U nas dobrze zjesz!</h4>
            <ol>
                <li>Obiady od 40 zł</li>
                <li>Przekąski od 10 zł</li>
                <li>Kolacje od 20zł</li>
            </ol>
        </section>
    </main>
    <section class="bottom">
        <h2>Zarezerwuj stolik on-line</h2>
        <form method="post" action="rezerwacja.php" >
            <label for="date">Data (format rrr-mm-dd):</label> <br>
            <input type="text" name="date"><br>
            <label for="quantity">Ile osób?:</label> <br>
            <input type="number" name="quantity" min="0"><br>
            <label for="phone">Twój numer telefonu:</label><br>
            <input type="text" name="phone"><br>
            <input type="checkbox" name="agree"> Zgadzam się na przetwarzanie moich danych osobowych <br>
            <button type="reset">WYCZYŚĆ</button>
            <button type="submit" name="submit">REZERWUJ</button>    
        </form>
        <?php
            $date=$_POST["date"];
            $quantity=$_POST["quantity"];
            $phone=$_POST["phone"];
            $query="INSERT INTO `rezerwacje`(`id_rezerwacji`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES ('NULL','NULL','$date','$quantity','$phone');";
                if(!empty($date) && !empty($quantity) && !empty($phone)); {
                $conn=mysqli_connect("localhost", "root", "", "restauracja");
                $query=mysqli_query($conn, $query);
                mysqli_close($conn);
                echo "Dodano rezerwację do bazy";
                } 
        ?>
    </section>
    <footer>
        <em>Stronę internetową opracował: PESEL</em> 
    </footer>
</body>
</html>