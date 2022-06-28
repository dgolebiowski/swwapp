<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Panel Zakladow - Sprawdz | KoperAPP x SWW |</title>
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

if(empty($_SESSION['login']))
{
	header("Location: login.php");
}

	$zapytanie = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
	$wynik = mysql_fetch_array($zapytanie);
	
	if($wynik['ranga'] < 5)
{?>
	<span class="lg-c">Ta część strony nie jest dla Ciebie dostępna!</span>
<?php }
else
{ ?>
<div class="main-content">
	
	<div class="header">
		<div class="header-big">Panel Zakladow</div>
		<div class="header-small">Sprawdzanie podatków.</div>
	</div>


<?php

if($_GET['id'])
	{
		
		$pobierz = "SELECT * FROM zgloszenia WHERE id='" . $_GET['id'] . "'";
		$wyszlo = mysql_query($pobierz) or die(mysql_error());
		$item = mysql_fetch_array($wyszlo); 
		
$login = $item['login'];
$data = $item['data'];
$idmecz = $item['idmecz'];
$team = $item['team'];
$wynikmecz = $item['wynik'];
$punktyo = $item['punkty'];

$meczebaza = mysql_query("SELECT * FROM gameskl WHERE id='". $idmecz ."'"); 
$mecz = mysql_fetch_array($meczebaza);

$userbaza = mysql_query("SELECT * FROM user WHERE login='". $login ."'"); 
$user = mysql_fetch_array($userbaza);

$stankonta = $user['punkty'];
if($mecz['win']==1)
{
	$punktywin = $punktyo * $mecz['stawka1'];
}
else if($mecz['win']==2)
{
	$punktywin = $punktyo * $mecz['stawka2'];
}
else if($mecz['win']==3)
{
	$punktywin = $punktyo * $mecz['remisstawka'];
}

		if($_POST['akceptuj'] == 1)
	{
			if($mecz['win']==1)
			{
			$punktywin = $punktyo * $mecz['stawka1'];
			
			$punktynew = $stankonta + $punktywin;
			$userkasa = "UPDATE user SET punkty='". $punktynew ."' WHERE login='". $login ."'";
			mysql_query($userkasa) or die(mysql_error());
			
			$zmianazgloszeniaw = "UPDATE `zgloszenia` SET `win`='2',`sprawdzone`='". $punktywin ."' WHERE `id`='". $_GET['id'] ."'";
			mysql_query($zmianazgloszeniaw) or die(mysql_error());
			
			header("Location: admin_akceptuj.php");
			}
			else if($mecz['win']==2){
			$punktywin = $punktyo * $mecz['stawka2'];
			
			$punktynew = $stankonta + $punktywin;
			$userkasa = "UPDATE user SET punkty='". $punktynew ."' WHERE login='". $login ."'";
			mysql_query($userkasa) or die(mysql_error());
			
			$zmianazgloszeniaw = "UPDATE `zgloszenia` SET `win`='2',`sprawdzone`='". $punktywin ."' WHERE `id`='". $_GET['id'] ."'";
			mysql_query($zmianazgloszeniaw) or die(mysql_error());
			
			header("Location: admin_akceptuj.php");
			}
			else if($mecz['win']==3){
			$punktywin = $punktyo * $mecz['remisstawka'];
			
			$punktynew = $stankonta + $punktywin;
			$userkasa = "UPDATE user SET punkty='". $punktynew ."' WHERE login='". $login ."'";
			mysql_query($userkasa) or die(mysql_error());
			
			$zmianazgloszeniaw = "UPDATE `zgloszenia` SET `win`='2',`sprawdzone`='". $punktywin ."' WHERE `id`='". $_GET['id'] ."'";
			mysql_query($zmianazgloszeniaw) or die(mysql_error());
			
			header("Location: admin_akceptuj.php");
			}
			else{
			header("Location: admin_akceptuj.php");
			}
		}
		
		if($_POST['odrzuc'] == 1)
	{			
			$zmianazgloszenial = "UPDATE `zgloszenia` SET `win`='1' WHERE `id`='". $_GET['id'] ."'";
			mysql_query($zmianazgloszenial) or die(mysql_error());
			
			header("Location: admin_akceptuj.php");
		}
	?>
	
	<div class="title">Podsumowanie</div>
  <div class="header-small">
    <b>Mecz: <span class="lg-c"><?php echo $mecz['team1']; ?> vs <?php echo $mecz['team2']; ?> </span></b><br />
	<?php 
	if($mecz['win']==1)
	{
	echo '<b>Wygrany: <span class="lg-c">' . $mecz['team1'] .'</span></b><br />';
	}
	else if($mecz['win']==2)
	{
		echo '<b>Wygrany: <span class="lg-c">' . $mecz['team2'] .'</span></b><br />';
	}
	else if($mecz['win']==3)
	{
		echo '<b>Wygrany: <span class="lg-c"> Remis </span></b><br />';
	}
	else
	{
		echo '<b>Wygrany: <span class="lg-c">Nie wpisano do systemu ):</span></b><br />';
	}
	?>
	<b>Wynik meczu: <span class="lg-c"><?php echo $mecz['winwynik']; ?></span></b><br />
	<br><br>
	<b>Login uzytkownika: <span class="lg-c"><?php echo $login; ?> - <?php echo $user['klasa']; ?></span></b><br />
	<b>Stan konta: <span class="lg-c"><?php echo $stankonta; ?>PKT</span></b><br />
	<b>Obstawiony zwyciezca: <span class="lg-c"><?php echo $team; ?> </span></b><br />
	<b>Obstawiony wynik: <span class="lg-c"><?php echo $wynikmecz; ?> </span></b><br />
	<b>Obstawione punkty: <span class="lg-c"><?php echo $punktyo; ?> PKT</span></b><br />
	<b>Do zapłaty: <span class="lg-c"><?php echo $punktywin; ?> PKT</span></b><br />

 </div>
 
 <br>
<form action="admin_zaklad.php?id=<?php echo $item[0]; ?>" method="post">
		<input type="hidden" value="1" name="akceptuj"><button type="submit" name="submit" class="btn btn-form">Akceptuj</button>
</form>
<form action="admin_zaklad.php?id=<?php echo $item[0]; ?>" method="post">
		<input type="hidden" value="1" name="odrzuc"><button type="submit" name="submit" class="btn btn-form">Odrzuć</button>
</form>
<?php
	}
}
	?>
</div>
</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>