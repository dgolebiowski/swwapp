<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>| KoperAPP x SWW |</title>
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


<div class="main-league">
<div id="trapezik"></div>
<div class="league-title"> KOPERLIGA </div>

<div class="wprowadzenie"> 
Tutaj sprawdzisz najbliższe mecze!<br>
Kliknij ‘Obstaw Mecz’ aby wziąć udział w obstawianiu.
</div>

<div class="mecze">


<?php 
  $listaeventy = mysql_query("SELECT * FROM gameskl WHERE end='0' ORDER BY `id` ASC") or die(mysql_error());

  while ( $row = mysql_fetch_row($listaeventy) ) 
  {
	 echo '<div class="mecz-item">
		<div class="mecz-dyscyplina">'. $row[2] .'</div>
		<div class="mecz-rank">'. $row[1] .'</div>
		<div class="mecz-left">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> '. $row[3] .' </div>
		</div>
		
		<div class="mecz-center">
			<div class="vs"> VS </div>
			<div class="mecz-data"> '. $row[5] .' </div>
			<div class="mecz-czas"> '. $row[6] .' godzina lekcyjna </div>
			<div class="mecz-obstaw"> 
				<a href="obstaw.php?id=' . $row[0] .'"><div class="obstaw-text"> OBSTAW MECZ</div></a>
			</div>
		</div>
		
		<div class="mecz-right">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> '. $row[4] .' </div>
		</div>
	</div>';
  }
?>

	
</div>


<div class="mecze">

<div class="title">Zakończone mecze</div>
<?php 
  $listaeventy = mysql_query("SELECT * FROM gameskl WHERE end='1' ORDER BY `id` DESC LIMIT 5") or die(mysql_error());

  while ( $row = mysql_fetch_row($listaeventy) ) 
  {
	 echo '<div class="mecz-item">
		<div class="mecz-dyscyplina">'. $row[2] .'</div>
		<div class="mecz-rank">'. $row[1] .'</div>
		<div class="mecz-left">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> '. $row[3] .' </div>
		</div>
		
		<div class="mecz-center">
			<div class="vs"> VS </div>
			<div class="mecz-data"> '. $row[5] .' </div>
			<div class="mecz-czas"> '. $row[6] .' godzina lekcyjna </div>
			<div class="mecz-obstaw"> 
				<a href="obstaw.php?id=' . $row[0] .'"><div class="obstaw-text"> ZOBACZ WYNIK</div></a>
			</div>
		</div>
		
		<div class="mecz-right">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> '. $row[4] .' </div>
		</div>
	</div>';
  }
?>

	
</div>

</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>