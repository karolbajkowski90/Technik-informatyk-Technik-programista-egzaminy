<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
    </header>
    <main>
        <section class="left">
            <h2>Dodaj czytelnika</h2>
            <form action="" method="post">
                imię: <input type="text" name="imie" id="imie"><br>
                nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
                rok urodzenia <input type="number" name="rok" id="rok"><br>
                <button type="submit">DODAJ</button>
                
            </form>
            <?php
               $imie = $_POST['imie']?? null;
               $nazwisko = $_POST['nazwisko']?? null;
               $rok = $_POST['rok']?? null;

                $pierwszeLiteryImienia = strtolower(substr($imie, 0, 2));
                $ostatnieCyfryRokuUrodzenia = substr($rok, -2);
                $pierwszeLiteryNazwiska = strtolower(substr($nazwisko, 0, 2));
                $kodCzytelnika = $pierwszeLiteryImienia . $ostatnieCyfryRokuUrodzenia . $pierwszeLiteryNazwiska;
                    
               $polaczenie = new mysqli("localhost", "root", "", "biblioteka");
               $kwerenda = "INSERT INTO czytelnicy (id, imie, nazwisko, kod) VALUES (NULL, '$imie', '$nazwisko', '$kodCzytelnika');";
                if($polaczenie -> query($kwerenda)=== TRUE) {

                    echo "Czytelnik: $nazwisko został dodany do bazy danych";
                }  else {
                    echo "error!";
                }
                               
            ?>
            
        </section>
        <section class="middle">
           <img src="biblioteka.png" alt="biblioteka">
           <h4>ul. Czytelnicza 25<br> 12-120 Książkowice<br> tel.: 123123123<br> e-mail: <a href="mailto:">biuro@bib.pl</a></h4> 
        </section>
        <section class="right">
            <h3>Nasi czytelnicy:</h3>
            <ul>
                <?php
                $kwerenda2 = "SELECT imie, nazwisko from czytelnicy;";
                $wynik = mysqli_query($polaczenie, $kwerenda2);
                
                while ($row = mysqli_fetch_row($wynik)) {
                    echo "<li>". $row[0]. " ". $row[1]."</li>";
                }
                    mysqli_close($polaczenie);
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>Projekt witryny: PESEL 9876543210</p>
    </footer>
</body>
</html>



<!-- $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok = $_POST['rok'];
                $pierwszeLiteryImienia = strtolower(substr($imie, 0, 2));
                $ostatnieCyfryRokuUrodzenia = substr($rok, -2);
                $pierwszeLiteryNazwiska = strtolower(substr($nazwisko, 0, 2));
                $kodCzytelnika = $pierwszeLiteryImienia . $ostatnieCyfryRokuUrodzenia . $pierwszeLiteryNazwiska;
                $kwerenda = "INSERT INTO czytelnicy (id, imie, nazwisko, kod) VALUES (NULL, '$imie', '$nazwisko', '$kodCzytelnika');";
                $polaczenie = mysqli_connect("localhost", "root", "", "biblioteka");
                mysqli_query($polaczenie, $kwerenda);
                echo "Czytelnik $nazwisko został dodany do bazy danych";
                

                mysqli_close($polaczenie); -->