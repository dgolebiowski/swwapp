<?php
header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Rejestracja | SamoŻycie |</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logowanie/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="logowanie/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="logowanie/css/util.css">
	<link rel="stylesheet" type="text/css" href="logowanie/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
include('connect.php');
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<span class="login100-form-title p-b-22">
						SAMOŻYCIE
					</span>
					
  <?php
  
    if (isset($_POST['submit']))
		{
			if(!$_POST['login'] || !$_POST['password']) 
			{
				echo 'Nie wypełniono wszystkich pól!<br/><a href="register.php" class="alert-link">&laquo; Powrót</a>';
			}
			else
			{
			
					$konto =  mysql_real_escape_string (trim($_POST['login']));      
					$password = sha1(mysql_real_escape_string (trim($_POST['password']))); 
					$klasa= htmlspecialchars($_POST['klasa']);
					$imie = htmlspecialchars($_POST['imie']);
					$nazwisko = htmlspecialchars($_POST['nazwisko']);
					
   
					$ile = mysql_query("SELECT * FROM `user` WHERE login = '$konto'");
					$ile = mysql_num_rows($ile);
					
					if ($ile==0)
					{
						$zapytanie="INSERT INTO user (login,klasa,haslo,code,punkty,koperleague,ekoperleague,imie,nazwisko) VALUES('$konto','$klasa','$password','0','100','Brak Drużyny','Brak Drużyny','$imie','$nazwisko')";
						mysql_query($zapytanie);

						echo 'Konto zostało założone pomyślnie.<br />
						<a href="register.php" class="alert-link">Przejdź do logowania &raquo;</a>';

					}
					else
					{
						echo('Taki użytkownik już istnieje. Wymyśl jakiś inny login i spróbuj ponownie ;-)<br/><a href="register.php" class="alert-link">&laquo; Powrót</a>');
					}
				
			}
		}
	else
	{
		?>
				<form class="login100-form validate-form" action="register.php" method="post">

					<div class="form-group">
			<label for="InputLogin">Login</label>
			<input type="text" class="form-control" name="login">
		</div>
		<div class="form-group">
			<label for="InputImieNazwisko">Imie</label>
			<input type="text" class="form-control" name="imie">
		</div>
		<div class="form-group">
			<label for="InputImieNazwisko">Nazwisko</label>
			<input type="text" class="form-control" name="nazwisko">
		</div>
		<div class="form-group">
			<label for="InputKlasa">Klasa</label>
			<input type="text" class="form-control" name="klasa">
		</div>
		<div class="form-group">
			<label for="InputHaslo">Hasło</label>
			<input type="text" class="form-control"  name="password">
		</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">Zarejestruj</button>
						</div>
					</div>
					
		<div class="text-center p-t-115">
						<span class="txt1">
							Klikając przycisk "zarejestruj" akceptujesz <a href="regulamin.php">regulamin</a>!
						</span>
						
						</div>
				</form>
						<?php  
	}
	?>
			</div>
			
		</div>
	</div>
	

</body>
</html>

<?php ob_end_flush(); ?>