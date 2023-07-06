<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div class="hleft">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="hcenter">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="hright">
            <p class="pheader">maj, 2019 r.</p>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $conn= new mysqli("localhost", "root", "", "prognoza");
                $query= "SELECT * FROM pogoda WHERE miasta_id=1 ORDER BY data_prognozy ASC;";
                $result= mysqli_query($conn, $query);
                while($r= mysqli_fetch_row($result)){
                    echo "<tr>";
                    echo "<td>" . $r[2] . "</td>";
                    echo "<td>" . $r[3] . "</td>";
                    echo "<td>" . $r[4] . "</td>";
                    echo "<td>" . $r[5] . "</td>";
                    echo "<td>" . $r[6] . "</td>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </main>
    <section class="bottom">
        <div class="bleft">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>
        <div class="bright">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </section>
    <footer>
        <p>Stronę wykonał: Karol Bajkowski</p>
    </footer>
</body>
</html>