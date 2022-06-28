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
$games = mysql_query("SELECT * FROM `gameskl` WHERE id=" . $_GET['id'] ."") or die(mysql_error());
$wynikg = mysql_fetch_row($games);
 ?>
 
 
<div class="main-league">
<div id="trapezik"></div>
<div class="league-title"> KoperLiga </div>

<div class="wprowadzenie"> 
KoperLiga nie musi być nudna dla tych, którzy nie grają...<br>
Zostań mistrzem obstawiania!
</div>

<div class="przedstawienie">
	<div class="mecz-left">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> <?php echo $wynikg[3]; ?> </div>
			<div class="last-druzyna">
				<div class="lose">?</div>
				<div class="lose">?</div>
				<div class="lose">?</div>
			</div>
</div>
		
		<div class="mecz-center">
			<div class="vs"> VS </div>
			<div class="mecz-data"> <?php echo $wynikg[5]; ?> </div>
			<div class="mecz-czas"> <?php echo $wynikg[6]; ?> Godzina Lekcyjna</div>
		</div>
		
		<div class="mecz-right">
			<div class="logo-druzyna"> <img src="logo1.png" /></div>
			<div class="nazwa-druzyna"> <?php echo $wynikg[4]; ?> </div>
			<div class="last-druzyna">
				<div class="lose">?</div>
				<div class="lose">?</div>
				<div class="lose">?</div>
			</div>
	</div>
</div>

<?php 
$ranga = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
$user = mysql_fetch_array($ranga); 
	
$obstawiono= mysql_query("SELECT * FROM `zgloszenia` WHERE login='" . $_SESSION['login'] ."' AND idmecz='". $_GET['id'] ."'"); 
if($wynikg[9]==0 && mysql_num_rows($obstawiono)==1)
{
	echo '<br><br><div class="alert alert-danger"> Już obstawiłeś ten mecz ): </div>';
}
else if($wynikg[9]==1)
{
	echo '<br><br><div class="alert alert-danger">';
	if($wynikg[10]==1)
	{
	echo 'Zwycięzca: <span class="lg-c">'. $wynikg[3] .'</span>';
	}
	else if($wynikg[10]==2)
	{
	echo 'Zwycięzca: <span class="lg-c">'. $wynikg[4] .'</span>';
	}
	else if($wynikg[10]==3)
	{
	echo 'Zwycięzca: <span class="lg-c"> Remis </span>';
	}
	echo '<br>Wynik meczu: <span class="lg-c">'. $wynikg[11] .'</span>';
	if($wynikg[10]==1)
	{
	echo '<br>Kurs na wygrana druzyne: <span class="lg-c">'. $wynikg[7] .'</span></div>';
	}
	else if($wynikg[10]==2)
	{
	echo '<br>Kurs na wygrana druzyne: <span class="lg-c">'. $wynikg[8] .'</span></div>';
	}
	else if($wynikg[10]==3)
	{
	echo '<br>Kurs na wygrana druzyne: <span class="lg-c">'. $wynikg[12] .'</span></div>';
	}
	
}
else
{
	?>
	
<?php
if($_POST['obstaw'] == 1)
	{
		$teamwin = htmlspecialchars($_POST['teamwin']);
		$wynikm = htmlspecialchars($_POST['wynikm']);
		$punkty = htmlspecialchars($_POST['punkty']);
		$punktynew = $user['punkty']-$punkty;
		
		if($punkty>0)
		{
		if($punkty>$user['punkty'])
		{
			echo'<div class="alert alert-danger">Nie masz odpowiedniej ilości punktów aby obstawić ten mecz...</div>';
		}
		else 
		{
		mysql_query("UPDATE user SET punkty='". $punktynew ."' where login='". $_SESSION['login'] ."'");
		mysql_query("INSERT INTO zgloszenia VALUES (NULL, '". $_SESSION['login'] ."', NOW(), '0','". $_GET['id'] ."', '". $teamwin ."', '". $wynikm ."', '". $punkty ."', '0', '0')");		

			  header("Location: koperleague.php");
		}
		
		}
		else
		{
			echo'<div class="alert alert-danger">Musisz postawić jakieś punkty na mecz...</div>';
		}
		
	}
?>
<form method="post">
<div class="typowanie">
	<div class="winner">
		<div class="typ_title">Wybierz zwycięzce</div>
		<div class="width75">
		 <div class="form-group">
         <label for="teamwin"></label>
		<select class="form-control" name="teamwin">
			<option value="<?php echo $wynikg[3]; ?>"> <?php echo $wynikg[3]; ?>! </option>
			<option value="<?php echo $wynikg[4]; ?>"> <?php echo $wynikg[4]; ?>! </option>
			<option value="Remis"> Remis! </option>
		</select>
		</div>
		</div>
	</div>
	
	<div class="typowanie_left">
		<div class="typ_title">Wytypuj wynik</div>
		<div class="width75">
		<div class="form-group">
         <label for="wynikm"></label>
		<input type="text" class="form-control" name="wynikm">
		</div></div>
	</div>
	
	<div class="typowanie_right">
		<div class="typ_title">Stawka</div>
		<div class="width75">
		<div class="form-group">
         <label for="punkty"></label>
		<input type="text" class="form-control" name="punkty">
		</div></div>
	</div>
</div>


<div class="obstaw">
 <div class="form-group">
<input type="hidden" value="1" name="obstaw"><button type="submit" name="submit" class="btn btn-form">Obstawiam</button>
</div>
</form>

<div class="infoobstaw"> 
Pamiętaj, że każdy mecz możesz obstawić tylko raz! Nie ma możliwości zmiany typów.
</div>

</div>
<?php
}
?>

</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>