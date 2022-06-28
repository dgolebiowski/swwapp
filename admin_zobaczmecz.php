<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Panel Meczy - Edytuj | KoperAPP x SWW |</title>
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
		<div class="header-big">Panel Meczu</div>
		<div class="header-small">Edytowanie.</div>
	</div>


<?php

if($_GET['id'])
	{
		
		$pobierz = "SELECT * FROM gameskl WHERE id='" . $_GET['id'] . "'";
		$wyszlo = mysql_query($pobierz) or die(mysql_error());
		$item = mysql_fetch_array($wyszlo); 
		
$data = $item['data'];
$team1 = $item['team1'];
$team2 = $item['team2'];
$end = $item['end'];
$win = $item['win'];
$wynikmecz = $item['winwynik'];
$stawka1 = $item['stawka1'];
$stawka2 = $item['stawka2'];
$stawka3 = $item['remisstawka'];

$userbaza = mysql_query("SELECT * FROM user WHERE login='". $login ."'"); 
$user = mysql_fetch_array($userbaza);


		if($_POST['edytuj'] == 1)
	{
			$endn = htmlspecialchars($_POST['end']);
			$winn = htmlspecialchars($_POST['win']);
			$wynikmeczn = htmlspecialchars($_POST['wynikmecz']);
			$stawka1n = htmlspecialchars($_POST['stawka1']);
			$stawka2n = htmlspecialchars($_POST['stawka2']);
			$stawka3n = htmlspecialchars($_POST['stawka3']);
		
		
			$zmianazgloszeniaw = "UPDATE `gameskl` SET `stawka1`='". $stawka1n ."',`stawka2`='". $stawka2n ."',`remisstawka`='". $stawka3n ."',`winwynik`='". $wynikmeczn ."',`win`='". $winn ."',`end`='". $endn ."' WHERE `id`='". $_GET['id'] ."'";
			mysql_query($zmianazgloszeniaw) or die(mysql_error());
		
			
			header("Location: admin_meczekl.php");
			
	}
		
	?>
	
	<div class="title">Podsumowanie</div>
  <div class="header-small">
    <b>Mecz: <span class="lg-c"><?php echo $team1; ?> vs <?php echo $team2; ?> </span></b><br />
	 <b>Data: <span class="lg-c"><?php echo $data; ?></span></b><br />
 </div>
 
 <br>
<form action="admin_zobaczmecz.php?id=<?php echo $item[0]; ?>" method="post">

		<div class="form-group">
			<label for="st1"> Kurs1 [<?php echo $team1; ?>]</label>
			<input type="text" class="form-control" id="stawka1" name="stawka1" value="<?php echo $stawka1; ?>">
		</div>
		
			<div class="form-group">
			<label for="st2"> Kurs2 [<?php echo $team2; ?>]</label>
			<input type="text" class="form-control" id="stawka2" name="stawka2" value="<?php echo $stawka2; ?>">
		</div>
		
			<div class="form-group">
			<label for="st3"> Kurs3 [Remis]</label>
			<input type="text" class="form-control" id="stawka3" name="stawka3" value="<?php echo $stawka3; ?>">
		</div>
		
		<div class="form-group">
			<label for="koniec"> Koniec: 0 - Dostepny; 1 - Zakonczony Mecz</label>
			<input type="text" class="form-control" id="end" name="end" value="<?php echo $end; ?>">
		</div>
		
		<div class="form-group">
			<label for="win"> WIN: 0 - Nikt; 1 - Team1; 2 - Team2; 3 - Remis</label>
			<input type="text" class="form-control" id="win" name="win" value="<?php echo $win; ?>">
		</div>
		
		<div class="form-group">
			<label for="wynik"> Wynik meczu</label>
			<input type="text" class="form-control" id="wynikmecz" name="wynikmecz" value="<?php echo $wynikmecz; ?>">
		</div>
		
		<input type="hidden" value="1" name="edytuj"><button type="submit" name="submit" class="btn btn-form">Edytuj</button>
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