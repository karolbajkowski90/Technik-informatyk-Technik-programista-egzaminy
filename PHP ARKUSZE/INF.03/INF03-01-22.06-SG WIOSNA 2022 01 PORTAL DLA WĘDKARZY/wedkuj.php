<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section class="left_container">
            <div class="left1">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                <?php
                $pol=mysqli_connect("localhost", "root", "", "wedkowanie");
                $kwerenda1='SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby join lowisko ON ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj=3;';
                $wynik1=mysqli_query($pol, $kwerenda1);
                while ($row=mysqli_fetch_row($wynik1)) {
                    echo "<li>$row[0] pływa w rzece $row[1], $row[2].</li>";
                }
                
                ?>
                </ol>
            </div>
            <div class="left2">
                <h3>Ryby drapieżne naszych wód</h3><br>
                <table>
                 <tr>
                     <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <?php
                        $kwerenda2='SELECT id, nazwa, wystepowanie from ryby where styl_zycia=1;';
                        $wynik2=mysqli_query($pol, $kwerenda2);
                        while ($row=mysqli_fetch_row($wynik2)) {
                            echo "<tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                </tr>";
                        }
                    mysqli_close($pol);
                    ?>
                </table>
            </div>
        </section>
        <section class="right">
            <img src="ryba1v1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
    </main>
        <footer>
            <p>Stronę wykonał: PESEL</p>
        </footer>
    
</body>
</html>