<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Panel Administrator | KoperAPP |</title>
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
		<div class="header-big">Panel Adminka</div>
		<div class="header-small">sieam mordzix, co tam</div>
	</div>

<div class="przywileje">
	<li><a href="admin_users.php"><button class="btn btn-form">Lista Użytkowników</a> </span></button></li>
	<li><a href="admin_akcje.php"><button class="btn btn-form">Ostatnie Akcje</a> </span></button></li>
	<li><a href="admin_punkty.php"><button class="btn btn-form">Dodaj/Odejmij</a> </span></button></li>
	<li><a href="admin_multiwiadomosc.php"><button class="btn btn-form">Wyslij Wiadomosc</a> </span></button></li>
	<li><a href="admin_numerek.php"><button class="btn btn-form">Zmien Numerek</a> </span></button></li>
	<li><a href="admin_akceptuj.php"><button class="btn btn-form">Sprawdz Mecze</a> </span></button></li>
	<li><a href="admin_meczekl.php"><button class="btn btn-form">Edytuj Mecze</a> </span></button></li>
</div>
	
	</div>
</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>