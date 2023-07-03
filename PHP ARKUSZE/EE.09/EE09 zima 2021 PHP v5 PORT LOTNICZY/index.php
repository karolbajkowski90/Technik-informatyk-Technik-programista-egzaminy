<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Port lotniczy</title>
	<link rel="stylesheet" href="styl2.css">
</head>
<body>
	<header id="kontener-header">
		<header id="baner-1">
	<img src="zad5.png" alt="logo lotnisko">
		</header>
		<header id="baner-2">
			<h1>Przyloty</h1>
		</header>
		<header id="baner-3">
			<h3>Przydatne linki</h3>
			<a href="kwerendy.txt" target="_blank">Pobierz...</a>
		</header>
	</header>
	<main>
		<table>
			<tr>
				<th>Czas</th>
				<th>Kierunek</th>
				<th>Numer rejsu</th>
				<th>Status</th>
			</tr>
			<?php
			$polaczenie = mysqli_connect("localhost", "root","", "egzamin");
			$wyniki = mysqli_query($polaczenie,"SELECT czas, kierunek, nr_rejsu, status_lotu from przyloty;");
			while($r = mysqli_fetch_row($wyniki)) {
				echo "<tr>";
				echo "<td>".$r[0]."</td>";
				echo "<td>".$r[1]."</td>";
				echo "<td>".$r[2]."</td>";
				echo "<td>".$r[3]."</td>";
				echo "</tr>";
			}
			mysqli_close($polaczenie);
			?>
		</table>
	</main>
	<section id="kontener-stopka">
		<footer id="stopka-1">
			<p id="stopka_tekst">
				<?php
					if(isset($_COOKIE["odwiedzil"])) {
						echo "<i> Witaj ponownie na stronie lotniska</i>";
					} else {
					setcookie("odwiedzil", 1, time()+ 3600, "/");
						echo "<b> Dzień dobry! Strona lotniska używa ciasteczek</b>";
					}
				?>
			</p>
		</footer>
		<footer id="stopka-2">Autor:00000000000</footer>
	</section>
</body>
</html>