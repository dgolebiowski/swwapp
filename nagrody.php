<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Nagrody | KoperAPP x SWW |</title>
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

if($wynik['first']==0)
{
	header("Location: login_first.php");
}

?>

<div class="main-content">

<div class="content">

<div class="header">
		<div class="header-big">Nagrody! </div>
		<div class="header-small">Kliknij "Wymień" przy interesującej cię ofercie aby ją odebrać!
  </div>
	</div>

<div class="nagrody">
	<ul class="nagroda">
    <li class="nagroda_title">Konto Premium</li>
    <li class="nagroda_grey">500 PKT / rok</li>
    <li>Panel Premium</li>
    <li>2x więcej punktów za logowanie</li>
	<li>Bot z memami</li>
    <li class="nagroda_grey"><a href="#" class="nagroda_button">Wymień!</a></li>
  </ul>
</div>

<div class="nagrody">
	<ul class="nagroda">
    <li class="nagroda_title">Konto Premium+</li>
    <li class="nagroda_grey">999 PKT / rok</li>
    <li>Panel Premium</li>
    <li>3x więcej punktów za logowanie</li>
	<li>Bot z memami</li>
	<li>Słodkie zwierzaki na dzień dobry!</li>
    <li class="nagroda_grey"><a href="#" class="nagroda_button">Wymień!</a></li>
  </ul>
</div>

</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>