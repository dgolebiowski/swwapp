<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Dodaj/Odejmij | KoperAPP x SWW |</title>
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
		<div class="header-big">Panel Admina - Zmien numerek</div>
	</div>
<?php
	$zapytanie = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
	$wynik = mysql_fetch_array($zapytanie);
	
	if($wynik['ranga'] < 5)
{?>
	<span class="lg-c">Ta część strony nie jest dla Ciebie dostępna!</span>
<?php }
else
{ ?>
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
	$zapytanie2 = mysql_query("SELECT * FROM admin"); 
	$item = mysql_fetch_array($zapytanie2);
	
		if($_POST['zmien'] == 1)
	{
		$numerek = htmlspecialchars($_POST['numerek']);

		$dodaj = "UPDATE admin SET numerek='" . $numerek . "'";
			mysql_query($dodaj) or die(mysql_error());
		
			$_SESSION["success_add"] = '<div class="lg-c">Zaktualizowano!</div>';
			header("Location: /admin_numerek.php");
			die();
		}
	?>
	<form action="admin_numerek.php" method="post">
		
		<div class="form-group">
			<label for="Numerek">Numerek</label>
			<input type="text" class="form-control" id="exampleInputRozmiar" name="numerek" value="<?php echo $item['1']; ?>">
		</div>
		
		<input type="hidden" value="1" name="zmien"><button type="submit" name="submit" class="btn btn-form">Zmień</button>

</form>

<?php } ?> 
 
</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>