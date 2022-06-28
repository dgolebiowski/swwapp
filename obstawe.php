<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();
include('connect.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">

<?php
$games = mysql_query("SELECT * FROM `gameskl` WHERE id=" . $_GET['id'] ."") or die(mysql_error());
$wynikg = mysql_fetch_row($games);
 ?>
 
<head>
	<title>Obstaw Mecz | KoperAPP x SWW |</title>
	<?php include('inc/dane_head.php'); ?>
</head>

<body>
<?php
include('inc/menu.php');

if(empty($_SESSION['login']))
{
	header("Location: login.php");
}


?>

<?php
$games = mysql_query("SELECT * FROM `gamesekl` WHERE id=" . $_GET['id'] ."") or die(mysql_error());
$wynikg = mysql_fetch_row($games);
 ?>
 
 
<div class="main-league">
<div id="trapezik"></div>
<div class="league-title"> EKoperLiga </div>

<div class="wprowadzenie"> 
eKoperLiga nie musi być nudna dla tych, którzy nie grają...<br>
Zostań mistrzem obstawiania!
</div>

<div class="przedstawienie">
	<div class="mecz-left">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> <?php echo $wynikg[3]; ?> </div>
			<div class="last-druzyna">
				<div class="win">W</div>
				<div class="win">W</div>
				<div class="lose">P</div>
				<div class="win">W</div>
			</div>
</div>
		
		<div class="mecz-center">
			<div class="vs"> VS </div>
			<div class="mecz-data"> <?php echo $wynikg[5]; ?> </div>
			<div class="mecz-czas"> MECZ ONLINE </div>
		</div>
		
		<div class="mecz-right">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> <?php echo $wynikg[4]; ?> </div>
			<div class="last-druzyna">
				<div class="win">W</div>
				<div class="win">W</div>
				<div class="lose">P</div>
				<div class="lose">P</div>
			</div>
	</div>
</div>


<div class="typowanie">
	<div class="winner">
		<div class="typ_title">Wybierz zwycięzce</div>
	</div>
	
	<div class="typowanie_left">
		<div class="typ_title">Wytypuj wynik</div>
	</div>
	
	<div class="typowanie_right">
		<div class="typ_title">Stawka</div>
	</div>
</div>


<div class="obstaw">
<button type="submit" name="submit" class="btn btn-form">Obstawiam</button>

<div class="infoobstaw"> 
Pamiętaj, że każdy mecz możesz obstawić tylko raz! Nie ma możliwości zmiany typów.
</div>

</div>


</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>