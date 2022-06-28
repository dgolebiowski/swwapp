<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Wiadomosc | SamoŻycie |</title>
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
		<div class="header-big">Wiadomosc</div>
		<div class="header-small">Wyslij wiadomosc do uzytkownika.</div>
	</div>
<?php
	$zapytanie = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
	$wynik = mysql_fetch_array($zapytanie);
	
?>
		  <script>
                var ilosc = 0;
            </script>
			
  <div class="title">Panel Admina - Wyslij wiadomosc</div>
                <div class="przelew">
                    <?php
                        if($wynik['ranga']<5)
                        {
                            echo "Ta część strony nie jest dla Ciebie dostępna!";
                        }
                        else
                        {

                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                        if ($_POST['dodaj'] == 1) {
                            foreach ($_POST["user"] as $r) {
                                $uzytkownik = htmlspecialchars($r);
					
					
							$tresc = "<b>" . nl2br($_POST['tresc']) . "</b>";
							$od = $_SESSION['login'];
							$data = date("Y-m-d H:i");
							$dodaj = "INSERT INTO wiadomosc VALUES (NULL, '$tresc', '$uzytkownik', '$od', '$data', '0')";
							mysql_query($dodaj) or die(mysql_error());
								
                            }


                            $_SESSION['success'] = '<span class="lg-c">Wysłano!</span>';
                            header("Location: /admin_multiwiadomosc.php");
                        }
						
                        ?>

                    <form action="admin_multiwiadomosc.php" method="post">
					<div class="form-group">
					<label for="exampleInputEmail1">Treść:</label>
					<textarea class="form-control" name="tresc"></textarea>
					</div>
                        <span class="lg-c">Klasa 1Ap</span>
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Ap' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)"> ' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
                        <br /><span class="lg-c">Klasa 1Bp</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Bp' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
                        <br /><span class="lg-c">Klasa 1Cp</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Cp' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
						 <br /><span class="lg-c">Klasa 1Dp</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Dp' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
							<br /><span class="lg-c">Klasa 1Bg</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Bg' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>

							<br /><span class="lg-c">Klasa 1Cg</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Cg' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
<br /><span class="lg-c">Klasa 1Dg</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='1Dg' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
							<br /><span class="lg-c">Klasa 2A</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='2A' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>

							<br /><span class="lg-c">Klasa 2B</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='2B' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
<br /><span class="lg-c">Klasa 2C</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='2C' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
							<br /><span class="lg-c">Klasa 2D</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='2D' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
<br /><span class="lg-c">Klasa 2E</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='2E' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
							<br /><span class="lg-c">Klasa 3A</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='3A' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>

							<br /><span class="lg-c">Klasa 3B</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='3B' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
<br /><span class="lg-c">Klasa 3C</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='3C' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
							<br /><span class="lg-c">Klasa 3D</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='3D' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
							
<br /><span class="lg-c">Klasa 3E</span><br />
                        <?php
                            $users = mysql_query("SELECT * FROM user WHERE klasa='3E' ORDER BY nazwisko ASC");
                            while ($user = mysql_fetch_assoc($users)) {
                                echo '<div class="checkbox">
	<label><input type="checkbox" value="' . $user['login'] . '" name="user[]" onchange="checkboxclock(this)">' . $user['imie'] . ' ' . $user['nazwisko'] . ' - <b>'. $user['login'] .'</b></label>
			</div>';
                            }

                            ?>
                        <br /><input type="hidden" value="1" name="dodaj">
                        <button type="submit" name="submit" class="btn btn-form button-multiwiadomosc">Potwierdz
                            wysylanie
                        </button>
                    </form>
					</div>
 
<?php } ?>
</div>

 <script>
            function checkboxclock(element) {
                if (element.checked) {
                    ilosc++;
                    $(".button-multiwiadomosc").text("Potwierdz wysylanie (" + ilosc + ")");
                } else {
                    ilosc--;
                    if (ilosc > 0) {
                        $(".button-multiwiadomosc").text("Potwierdz wysylanie (" + ilosc + ")");
                    } else {
                        $(".button-multiwiadomosc").text("Potwierdz wysylanie");
                    }
                }

            }
        </script>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>