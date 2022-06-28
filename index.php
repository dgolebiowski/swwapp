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

if($wynik['first']==0)
{
	header("Location: login_first.php");
}

?>

<div class="main-content">
	
	<div class="header">
		<div class="header-big">Cześć <?php echo $wynik['imie']; ?>!!! </div>
		<div class="header-small">Wszystkie aktualnosci wyświetlą się tutaj.
  </div>
	</div>

<?php
	$zapytanie2 = mysql_query("SELECT * FROM wiadomosc WHERE do='".$_SESSION['login']."' AND przeczytane='0'"); 
	$ile = mysql_num_rows($zapytanie2);
		
	if($ile > 0)
	{
?>
	<div class="wiadomosc">
		<div class="wiadomosc-big"> Masz nowa wiadomosc! </div>
		<div class="wiadomosc-small"><a href="wiadomosci.php">Kliknij tutaj aby ja zobaczyc!</a></div>
	</div>
	
<?php } ?>


<div class="content">
<div class="alert alert-warning" role="alert">
<?php 
$adminbaza = mysql_query("SELECT * FROM admin") or die(mysql_error());
$admin = mysql_fetch_row($adminbaza);
?>
  Szczęśliwy numerek: <b><?php echo $admin[4]; ?></b>
</div>


<div class="przelew">
	<?php
                    if(isset($_SESSION['success_add'])){
                        echo $_SESSION['success_add'];
                        unset($_SESSION['success_add']);
                    }
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
					?>
<?php 

		if($_POST['codzienne'] == 1)
	{
		if($wynik['codzienne']==0)
		{
			if($wynik['ranga']<=1)
			{
				$punktynew1 = $wynik['punkty']+1;
				$dodajadm = "UPDATE user SET punkty='". $punktynew1 ."' WHERE login='". $_SESSION['login'] ."'";
				mysql_query($dodajadm) or die(mysql_error());
			}
			else if($wynik['ranga']==2)
			{
				$punktynew2 = $wynik['punkty']+2;
				$dodajadm = "UPDATE user SET punkty='". $punktynew2 ."' WHERE login='". $_SESSION['login'] ."'";
				mysql_query($dodajadm) or die(mysql_error());
			}
			else if($wynik['ranga']==3)
			{
				$punktynew3 = $wynik['punkty']+3;
				$dodajadm = "UPDATE user SET punkty='". $punktynew3 ."' WHERE login='". $_SESSION['login'] ."'";
				mysql_query($dodajadm) or die(mysql_error());
			}
			else
			{
				$punktynewadm = $wynik['punkty']+5;
				$dodajadm = "UPDATE user SET punkty='". $punktynewadm ."' WHERE login='". $_SESSION['login'] ."'";
				mysql_query($dodajadm) or die(mysql_error());
			}
			
			$daily = "UPDATE user SET codzienne='1' WHERE login='". $_SESSION['login'] ."'";
			mysql_query($daily) or die(mysql_error());
			
			$_SESSION["success_add"] = '<div class="lg-c">Dodano punkty! Wróc jutro po następne!</div>';
			header("Location: /index.php"); 
			die();
		}
		
		else
		{
			$_SESSION["success_add"] = '<div class="lg-c">Niestety ale odebrałeś już punkty! Wróc jutro ((:</div>';
			header("Location: /index.php");
			die();
		}
	}
	?>
<form action="index.php" method="post">
		
		<input type="hidden" value="1" name="codzienne"><button type="submit" name="submit" class="btn btn-form">Daily Login!</button>

</form>
</div>

<?php 
  $listainfo = mysql_query("SELECT * FROM aktualnosci ORDER BY `data` DESC LIMIT 5") or die(mysql_error());

  while ( $row = mysql_fetch_row($listainfo) ) 
  {
	  echo '<div class="alert alert-sww">'. $row[1] .' </br><span class="alert-small">Dodano '. $row[2] .'</span></div>';
  }
  
?>
</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>