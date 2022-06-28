<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Plany Lekcji | KoperAPP x SWW |</title>
	<?php include('inc/dane_head.php'); ?>
</head>

<body>
<?php
include('connect.php');
include('inc/menu.php');

if(empty($_SESSION['login']))
{
	header("Location: login.php");
}


?>

<div class="main-content">
	
		<div class="header">
		<div class="header-big">Wybierz klase!</div>
		<div class="header-small"></div>
		</div>
		
<div class="przyciski_historia">
		<li><a href="javascript:void(0)" id="button-1A" class="btn btn-klasa" onclick="show1Ap()">1 Ap</a>
		<li><a href="javascript:void(1)" id="button-1B" class="btn btn-klasa" onclick="show1Bp()">1 Bp</a>
		<li><a href="javascript:void(2)" id="button-1C" class="btn btn-klasa" onclick="show1Cp()">1 Cp</a>
		<li><a href="javascript:void(3)" id="button-1D" class="btn btn-klasa" onclick="show1Dp()">1 Dp</a>
		<br>
		<li><a href="javascript:void(1)" id="button-1B" class="btn btn-klasa" onclick="show1Bg()">1 Bg</a>
		<li><a href="javascript:void(2)" id="button-1C" class="btn btn-klasa" onclick="show1Cg()">1 Cg</a>
		<li><a href="javascript:void(3)" id="button-1D" class="btn btn-klasa" onclick="show1Dg()">1 Dg</a>
		<br>
		<li><a href="javascript:void(5)" id="button-2A" class="btn btn-klasa" onclick="show2A()">2 A</a>
		<li><a href="javascript:void(5)" id="button-2B" class="btn btn-klasa" onclick="show2B()">2 B</a>
		<li><a href="javascript:void(5)" id="button-2C" class="btn btn-klasa" onclick="show2C()">2 C</a>
		<li><a href="javascript:void(5)" id="button-2D" class="btn btn-klasa" onclick="show2D()">2 D</a>
		<li><a href="javascript:void(5)" id="button-2E" class="btn btn-klasa" onclick="show2E()">2 E</a>
		<br>
		<li><a href="javascript:void(5)" id="button-3A" class="btn btn-klasa" onclick="show3A()">3 A</a>
		<li><a href="javascript:void(5)" id="button-3B" class="btn btn-klasa" onclick="show3B()">3 B</a>
		<li><a href="javascript:void(5)" id="button-3C" class="btn btn-klasa" onclick="show3C()">3 C</a>
		<li><a href="javascript:void(5)" id="button-3D" class="btn btn-klasa" onclick="show3D()">3 D</a>
		<li><a href="javascript:void(5)" id="button-3E" class="btn btn-klasa" onclick="show3E()">3 E</a>
</div>
		
<div class="ranking" id="1Ap" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala">SALA 25</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2 </div>
<div class="r_nauczyciel"> prof. Z. Pokrzewiński/I. Strobin-Pokrzewińska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 41/4</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2 </div>
<div class="r_nauczyciel"> prof. Z. Pokrzewiński/I. Strobin-Pokrzewińska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> MUZYKA/FP</div>
<div class="r_nauczyciel"> prof. M. Lewy/B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 45/34</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/NK/WOS/FK </div>
<div class="r_nauczyciel"> prof. MJ/SZ/ST/BS </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> 14/16/24/34</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/NK/MUZYKA/FK </div>
<div class="r_nauczyciel"> prof. MJ/SZ/LM/BS </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> 14/16/45/34</div>
</div> </div>
 

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>


<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> W-F CH. </div>
<div class="r_nauczyciel"> prof. E. Żebrowska-Zych </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia </div>
<div class="r_nauczyciel"> prof. M. Chrabelski </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> EDB </div>
<div class="r_nauczyciel"> prof. J. Lauk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia </div>
<div class="r_nauczyciel"> prof. J. Piwoński </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> W-F CH./DZ.</div>
<div class="r_nauczyciel"> prof. EZZ/SA </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM.</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> W-F CH./DZ. </div>
<div class="r_nauczyciel"> prof. EZZ/SA </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM.</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia </div>
<div class="r_nauczyciel"> ks. M. Wojtasik </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 46	</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia </div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/FP </div>
<div class="r_nauczyciel"> prof. J. Piwoński/B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 35/34</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2 </div>
<div class="r_nauczyciel"> prof. EZZ/ZP </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 36/4</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/INF2 </div>
<div class="r_nauczyciel"> prof. IS/EZZ </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 41/36</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Etyka </div>
<div class="r_nauczyciel"> prof.  </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 16</div>
</div> </div>
</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. IS/ZP </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 41/4</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski </div>
<div class="r_nauczyciel"> prof. A. Przystańska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski </div>
<div class="r_nauczyciel"> prof. A. Przystańska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia </div>
<div class="r_nauczyciel"> prof. U. Trędak </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ. </div>
<div class="r_nauczyciel"> prof. A. Szewczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA GIM.</div>
</div> </div>

</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski </div>
<div class="r_nauczyciel"> prof. A. Przystańska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia </div>
<div class="r_nauczyciel"> prof. M. Chrabelski </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia </div>
<div class="r_nauczyciel"> prof. J. Piwoński </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

</div>

</div>


<div class="ranking" id="1Bp" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1</div>
<div class="r_nauczyciel"> prof. P. Mateja</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 36</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. AM/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 13/34</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. AM/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 13/34</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/MUZ/MUZ/FK</div>
<div class="r_nauczyciel"> prof. MJ/LM/LM/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> 14/45/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/WOS/WOS/FK</div>
<div class="r_nauczyciel"> prof. MJ/JP/JP/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> 14/35/34 </div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. E. Żebrowska-Zych</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/NK/FP/WOS</div>
<div class="r_nauczyciel"> prof. JP/Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> 35/16/34/35</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia </div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> EDB</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF2</div>
<div class="r_nauczyciel"> prof. P. Mateja</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 36</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Wojtasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. U. Trędak</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>

<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="1Cp" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/MUZYKA/FK</div>
<div class="r_nauczyciel"> prof. MJ/-/LM/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> 14/-/45/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/MUZYKA/FK</div>
<div class="r_nauczyciel"> prof. MJ/-/LM/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> 14/-/45/34</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/FP</div>
<div class="r_nauczyciel"> prof. JP/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 35/34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. AM/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 13/4</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/SA</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/SA</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>

<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. A. Szewczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> EDB</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="1Dp" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> MUZYKA/NK/FP/MUZYKA</div>
<div class="r_nauczyciel"> prof. LM/MJ/BS/LM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> 45/46/34/45</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/WOS/WOS/FK</div>
<div class="r_nauczyciel"> prof. MJ/ST/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> 14/24/24/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/MUZYKA/MUZYKA/FK</div>
<div class="r_nauczyciel"> prof. MJ/LM/LM/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> 14/45/45/34</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. E. Brochocka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chmeia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. D. Posiła</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/INF</div>
<div class="r_nauczyciel"> prof. AM/EZZ</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 13/36</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF/ANG2</div>
<div class="r_nauczyciel"> prof. EZZ/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 36/11</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/NK/FP/WOS</div>
<div class="r_nauczyciel"> prof. JP/MJ/BS/JP</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> 35/14/34/35</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. AM/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 13/45</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="1Bg" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. U. Trędak</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> PP/NK/PP/FK</div>
<div class="r_nauczyciel"> prof. UU/MJ/UU/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 33/14/33/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF2</div>
<div class="r_nauczyciel"> prof. P. Mateja</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/NK/WOS/FK</div>
<div class="r_nauczyciel"> prof. ST/MJ/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 24/46/24/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/PP/FP/PP</div>
<div class="r_nauczyciel"> prof. Sz/UU/BS/UU</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 47/35/34/35</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. MB/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 34/B</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>

<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> EDB</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="1Cg" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. E. Brochocka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/INF2</div>
<div class="r_nauczyciel"> prof. ZP/PM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 4/36</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> PP/WOK/PP/FK</div>
<div class="r_nauczyciel"> prof. UU/LM/UU/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 33/16/33/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. L. Szyburska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. E. Żebrowska-Zych</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2</div>
<div class="r_nauczyciel"> prof. PM/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 36/13</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/PP/WOS/FK</div>
<div class="r_nauczyciel"> prof. ST/UU/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 24/34/24/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/WOS/FP/PP</div>
<div class="r_nauczyciel"> prof. Sz/ST/BS/UU</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 47/24/34/35</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. E. Żebrowska-Zych</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 13</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/PMa</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 4/34</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. U. Trędak</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="1Dg" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> PP/WOK/PP/FK</div>
<div class="r_nauczyciel"> prof. UU/LM/UU/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 33/16/33/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. B. Matera</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. E. Wojciechowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/INF2</div>
<div class="r_nauczyciel"> prof. MB/EZZ</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 4/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2</div>
<div class="r_nauczyciel"> prof. EZZ/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 36/4</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Historia</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. E. Wojciechowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WOS/PP/WOS/FK</div>
<div class="r_nauczyciel"> prof. ST/UU/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> 24/34/24/33A</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/WOS/FP/PP</div>
<div class="r_nauczyciel"> prof. Sz/ST/BS/UU</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 47/24/34/35</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1 </div>
<div class="r_nauczyciel"> prof. B. Matera</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1 </div>
<div class="r_nauczyciel"> prof. B. Matera</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. E. Wojciechowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EZZ/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EZZ/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG2</div>
<div class="r_nauczyciel"> prof. B. Matera</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="2A" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. E. Brochocka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 4/46</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Ekonomia w praktyce</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/NK/-/FK</div>
<div class="r_nauczyciel"> prof. -/MJ/-/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> -/14/-/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/NK/-/FK</div>
<div class="r_nauczyciel"> prof. -/MJ/-/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> -/14/-/34</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Wojtasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/EB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>


<!-- LEKCJA [9] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 9. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 15.40 - 16.30</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="2B" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/FK</div>
<div class="r_nauczyciel"> prof. ST/Sz/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 24/11/24/34</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/FK</div>
<div class="r_nauczyciel"> prof. ST/Sz/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> 24/16/24/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2</div>
<div class="r_nauczyciel"> prof. PM/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 36/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2</div>
<div class="r_nauczyciel"> prof. PM/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 36/41</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF. DZ.</div>
<div class="r_nauczyciel"> prof. A. Szewczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/INF2</div>
<div class="r_nauczyciel"> prof. PMa/PM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 34/36</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> FIZYKA1/ANG2</div>
<div class="r_nauczyciel"> prof. PD/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 45/41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="2C" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/FK</div>
<div class="r_nauczyciel"> prof. ST/Sz/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 24/11/24/34</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/ANG2</div>
<div class="r_nauczyciel"> prof. SM/ZP</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 44/4</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. IS/SM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 41/44</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF. CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [9] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 9. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF. CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 15.40 - 16.30</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/FK</div>
<div class="r_nauczyciel"> prof. ST/Sz/ST/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> 24/16/24/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. A. Szewczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG2</div>
<div class="r_nauczyciel"> prof. Z. Pokrzewiński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 4</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Włodarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/FIZYKA2</div>
<div class="r_nauczyciel"> prof. IS/KC</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 41/47</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> FIZYKA1</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="2D" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. D. Posiła</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 33/44</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 13/33</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/ANG2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 44/46</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/NK/-/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 23/34 </div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/NK/-/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 23/34</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 13</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 13</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/ANG2</div>
<div class="r_nauczyciel"> prof. PD/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/26</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 13/33</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH. </div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [9] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 9. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH. </div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 15.40 - 16.30</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="2E" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2 </div>
<div class="r_nauczyciel"> prof. AM/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 13/46 </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2 </div>
<div class="r_nauczyciel"> prof. AM/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 13/46</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. JS/JL</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 44/31</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. JL/JS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 31/44</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>

<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA 13/46</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/FP/-</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. A. Przystańska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 46</div>
</div> </div>
</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="3A" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NK/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NK/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Kowalska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Kowalska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [9] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 9. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 15.40 - 16.30</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>
</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Geografia</div>
<div class="r_nauczyciel"> prof. M. Chrabelski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 23</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Kowalska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Kowalska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 46</div>
</div> </div>
<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>
</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="3B" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NK/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 11/34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NK/FK</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 11/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> FIZYKA/INF</div>
<div class="r_nauczyciel"> prof. DP/PM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 45/36</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF/FIZYKA</div>
<div class="r_nauczyciel"> prof. PM/DP </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 36/45</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> prof. M. Pietrasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. P. Dudek</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 45</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. P. Mateja</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 36</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. J. Piwoński</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 35</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> INF1/ANG2</div>
<div class="r_nauczyciel"> prof. PM/IK</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 36/33</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. ZP/IK</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 4/36</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 4/41</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/36</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 21/25/24</div>
</div> </div>
</div>

</div>


<div class="ranking" id="3C" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/HIS/-/FK</div>
<div class="r_nauczyciel"> prof. JP/BS </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 35/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. IS/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41/36</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Pietrasik </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 46</div>
</div> </div>
</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. IS/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 41/46</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. IS/MB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 41/46</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/EZZ</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/EZZ</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/HiS</div>
<div class="r_nauczyciel"> prof. JP/Sz/JP/JP</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> 35/16/35/35</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/FIZYKA2</div>
<div class="r_nauczyciel"> prof. JS/KC</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 44/47</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 13</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> FIZYKA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. KC/JS </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 47/44</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/HiS</div>
<div class="r_nauczyciel"> prof. JP/Sz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 35/23/35</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA </div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> </div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 44</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Fizyka</div>
<div class="r_nauczyciel"> prof. C. Koneczny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. M. Nagański</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 21</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> FIZYKA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. KC/JS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 47/44</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/FIZYKA2</div>
<div class="r_nauczyciel"> prof. </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 44/47</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. EB/EZZ</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

</div>

</div>


<div class="ranking" id="3D" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/HIS/-/FK</div>
<div class="r_nauczyciel"> prof. JP/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 35/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia </div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 47</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. JL/JS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 31/44</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 14</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/HiS</div>
<div class="r_nauczyciel"> prof. JP/MJ/JP/JP</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> 35/14/35/35</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. JS/JL</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 44/31</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>

<!-- LEKCJA [0] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 0. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> prof. M. Wojtasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 7.20 - 8.05</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS/NK/HiS/HiS</div>
<div class="r_nauczyciel"> prof. JP/MJ/JP</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> 35/14/35 </div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. JS/JL</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 44/31</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. JL/JS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 31/44</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/EB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/-/FP/-</div>
<div class="r_nauczyciel"> prof. Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 14/34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/NK/FP/-</div>
<div class="r_nauczyciel"> prof. Sz/JP/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> 14/35/34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. B. Anuszczyk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. MB/IK	</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 46/4</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. J. Staluszka</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. A. Rychlewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 25</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/EB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/EB</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. MB/IK </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 46/13</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/ANG2</div>
<div class="r_nauczyciel"> prof. MB/IK </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 46/13</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. J. Lauk</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 31</div>
</div> </div>

</div>

</div>


<div class="ranking" id="3E" style="display: none;">

<!-- Dzien [1] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Poniedziałek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> -/-/-/FK</div>
<div class="r_nauczyciel"> prof. B. Szklarczyk </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 34</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka </div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG/BIOLOGIA</div>
<div class="r_nauczyciel"> prof. AM/PD</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 13/33</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA/ANG</div>
<div class="r_nauczyciel"> prof. PD/AM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 33/13</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH./DZ.</div>
<div class="r_nauczyciel"> prof. KP/KR</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [8] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 8. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia </div>
<div class="r_nauczyciel"> prof. D. Posiła </div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.55 - 15.40</div>
<div class="r_sala"> SALA 33</div>
</div> </div>
</div>

<!-- Dzien [2] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Wtorek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF CH.</div>
<div class="r_nauczyciel"> prof. K. Pasikowski</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/BIOLOGIA2</div>
<div class="r_nauczyciel"> prof. AM/PD</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 13/33</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 16</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> BIOLOGIA1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. PD/SM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 33/44</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Godz. wych.</div>
<div class="r_nauczyciel"> prof. A. Mirowska-Przybył</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 13</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/ANG2</div>
<div class="r_nauczyciel"> prof. SM/AM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 44/13</div>
</div> </div>

</div>

<!-- Dzien [3] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Środa</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Religia</div>
<div class="r_nauczyciel"> ks. M. Wojtasik</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA 46</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. D. Posiła</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/NK/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/Sz/BS</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> 14/21/34</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> NP/NK/FP/-</div>
<div class="r_nauczyciel"> prof. MJ/Sz/Bs</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> 14/21/34</div>
</div> </div>

</div>

<!-- Dzien [4] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Czwartek</div>
</div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> HiS</div>
<div class="r_nauczyciel"> prof. S. Telega</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 24</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> CHEMIA1/ANG2</div>
<div class="r_nauczyciel"> prof. SM/AM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 44/13</div>
</div> </div>

</div>

<!-- Dzien [5] -->
<div class="dzien">
<div class="header">
		<div class="header-big">Piątek</div>
</div>
<!-- LEKCJA [1] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 1. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> WF DZ.</div>
<div class="r_nauczyciel"> prof. R. Kunikowska</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 8.15 - 9.00</div>
<div class="r_sala"> SALA GIM</div>
</div> </div>

<!-- LEKCJA [2] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 2. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> ANG1/CHEMIA2</div>
<div class="r_nauczyciel"> prof. AM/SM</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 9.10 - 9.55</div>
<div class="r_sala"> SALA 13/44</div>
</div> </div>

<!-- LEKCJA [3] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 3. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 10.05 - 10.50</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [4] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 4. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> J. Polski</div>
<div class="r_nauczyciel"> prof. H. Flejszman</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 11.20 - 12.05</div>
<div class="r_sala"> SALA 11</div>
</div> </div>

<!-- LEKCJA [5] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 5. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Chemia</div>
<div class="r_nauczyciel"> prof. M. Sienkiewicz</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 12.15 - 13.00</div>
<div class="r_sala"> SALA 41</div>
</div> </div>

<!-- LEKCJA [6] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 6. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Matematyka</div>
<div class="r_nauczyciel"> prof. J. Szymańska-Zagrodny</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 13.10 - 13.55</div>
<div class="r_sala"> SALA 26</div>
</div> </div>

<!-- LEKCJA [7] -->
<div class="miejsce">
<div class="r_pozycja" style="color: #000;"> 7. </div>
<div class="r_left">
<div class="r_uzytkownik">
<div class="r_przedmiot"> Biologia</div>
<div class="r_nauczyciel"> prof. D. Posiła</div>
</div> </div>
<div class="r_right">
<div class="r_godziny"> 14.05 - 14.50</div>
<div class="r_sala"> SALA 33</div>
</div> </div>

</div>

</div>


</div>
<!-- KONIEC CONTAINER-->

<script>
function show1Ap() {
   document.getElementById("1Ap").style.display = "block";
   document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Bp() {
  document.getElementById("1Bp").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Cp() {
  document.getElementById("1Cp").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Dp() {
  document.getElementById("1Dp").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Bg() {
  document.getElementById("1Bg").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Cg() {
  document.getElementById("1Cg").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show1Dg() {
  document.getElementById("1Dg").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dp").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show2A() {
  document.getElementById("2A").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show2B() {
  document.getElementById("2B").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show2C() {
  document.getElementById("2C").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}
function show2D() {
  document.getElementById("2D").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show2E() {
  document.getElementById("2E").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show3A() {
  document.getElementById("3A").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}


function show3B() {
  document.getElementById("3B").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show3C() {
  document.getElementById("3C").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3D").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show3D() {
  document.getElementById("3D").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3E").style.display = "none";
}

function show3E() {
  document.getElementById("3E").style.display = "block";
  document.getElementById("1Ap").style.display = "none";
  document.getElementById("1Bp").style.display = "none";
   document.getElementById("1Cp").style.display = "none";
    document.getElementById("1Dp").style.display = "none";
   document.getElementById("1Bg").style.display = "none";
   document.getElementById("1Cg").style.display = "none";
   document.getElementById("1Dg").style.display = "none";
   document.getElementById("2A").style.display = "none";
   document.getElementById("2B").style.display = "none";
   document.getElementById("2C").style.display = "none";
   document.getElementById("2D").style.display = "none";
   document.getElementById("2E").style.display = "none";
   document.getElementById("3A").style.display = "none";
   document.getElementById("3B").style.display = "none";
   document.getElementById("3C").style.display = "none";
   document.getElementById("3D").style.display = "none";
}
</script>


  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>