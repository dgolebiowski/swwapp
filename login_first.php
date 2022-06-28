<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Pierwsze Logowanie | KoperAPP |</title>
	<?php include('inc/dane_head.php'); ?>
</head>

<body>
<?php
include('connect.php');
setcookie("login", "", time() - 3600);
setcookie("haslohash", "", time() - 3600);
$zapytanie = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
$wynik = mysql_fetch_array($zapytanie); 

if(empty($_SESSION['login']))
{
	header("Location: login.php");
}
?>

<div class="first-login">
	
	<div class="header">
		<div class="header-big">Pierwsze Logowanie</div>
		<div class="header-small">Logujesz się pierwszy raz! Ustal dane swojego konta!
  </div>
	</div>
	
<div class="content">


 <?php 
		if($_POST['rejestruj'] == 1)
			if(!$_POST['user'] || !$_POST['password'] ||  !$_POST['email'] || !$_POST['zabezpieczenie']) 
			{
				echo 'Nie wypełniono wszystkich pól!';
			}
			else
			{	
		$login = htmlspecialchars($_POST['user']);
		$pass = sha1(mysql_real_escape_string (trim($_POST['password']))); 
		$email = htmlspecialchars($_POST['email']);
		$zabez = htmlspecialchars($_POST['zabezpieczenie']);

		mysql_query("UPDATE user SET login='". $login ."', haslo='". $pass ."', email='". $email ."', zabezpieczenie='". $zabez ."', first='1'  WHERE id='". $wynik['id'] ."' ");
		
		header("Location: wyloguj.php");
			}	
?>
	
<form action="login_first.php" method="post">
		
		<div class="form-group">
			<label for="user">Login</label>
			<input type="text" class="form-control" name="user">
		</div>
		
		<div class="form-group">
			<label for="imie">Imie Nazwisko</label>
			<input type="text" class="form-control" name="imie" value="<?php echo $wynik['imie']; echo $wynik['nazwisko'];?>" readonly>
		</div>
		
		<div class="form-group">
			<label for="password">Hasło</label>
			<input type="password" class="form-control" name="password">
		</div>
		
		<div class="form-group">
			<label for="email">E-Mail</label>
			<input type="text" class="form-control" name="email">
		</div>
		
		<div class="form-group">
			<label for="zabezpieczenie">Pytanie Zabezpieczające [Ulubiony Nauczyciel]</label>
			<input type="text" class="form-control" name="zabezpieczenie">
		</div>
		
		<input type="hidden" value="1" name="rejestruj"><button type="submit" name="submit" class="btn btn-form">Załóż konto!</button>

</form>

</div>
</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>