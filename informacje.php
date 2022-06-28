<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Regulamin | KoperAPP x SWW |</title>
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
		<div class="header-big">Regulamin</div>
		<div class="header-small">Ogólnie o aplikacji.</div>
	</div>


	<span class="lg-c">1. Postanowienia Ogólne</span><br>
				<span class="lg-cz">1.1. Strona przeznaczona jest do blabla.<br>
					1.2. Punkty to wirtualna waluta.<br>
					<br></span>
					<span class="lg-c">2. Konta</span><br><span class="lg-cz">
					2.1. Konto może utworzyć każdy uczeń LO1.<br>
					2.2. Kazdy użytkownik posiadający konto akceptuje regulamin.<br>
					2.3. Administrator zastrzega sobie możliwość do usunięcia, zablokowania konta bez podania przyczyny.<br>
					2.4. Użytkownik może posiadać tylko jedno konto w serwisie.<br>
					<br></span>
					<span class="lg-c">3. Obstawianie</span><br><span class="lg-cz">
					3.1. 'Obstawianie' rozumiemy jako przewidywanie wyniku meczu KoperLeague/eKoperLeague.<br>
					3.2. Każdy użytkownik może obstawić jeden mecz tylko i wyłącznie jeden raz bez możliwości zmiany typu.<br>
					3.3. W przypadku wygranego zakładu użytkownik otrzymuje nagrodę zgodnie z przewidzianym mnożnikiem.<br>
					3.4. W przypadku przegranego zakładu użytkownik traci punkty, które obstawił.<br>
					<br></span>
					<span class="lg-c">4. Postanowienia końcowe</span><br><span class="lg-cz">
					4.1. Administrator zastrzega możliwość zmiany regulaminu bez podania przyczyny.<br>
					4.2. Podczas zmiany regulaminu każdy uczestnik projektu zostanie poinformowany.<br>
</span>
	
	</div>
</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>