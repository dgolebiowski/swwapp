<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Administratorzy | KoperAPP x SWW |</title>
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
		<div class="header-big">Sztab SWW</div>
		<div class="header-small">Lista administratorów aplikacji. Do nich możesz zgłosić się z problemem.</div>
	</div>

<div class="content">
<span class="lg-n"> Dawid Gołębiowski </span> - <span class="lg-c">Administrator </span><br>
<span class="lg-n"> Mikołaj Włodarczyk </span> - <span class="lg-c"> Administrator APK </span><br>
<span class="lg-n"> Filip Hertel </span> - <span class="lg-c"> Administrator EKL-KL </span><br>
<span class="lg-n"> Mateusz Janczak </span> - <span class="lg-c"> Administrator EKL-KL </span><br>
</div>


	</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>