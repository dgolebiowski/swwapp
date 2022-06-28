<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1');
session_start(); //start sesji
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Ranking | KoperAPP x SWW |</title>
	<?php include 'inc/dane_head.php';?>
</head>

<body>
<?php
include 'connect.php';
include 'inc/menu.php';

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<div class="main-content">

	<div class="header">
		<div class="header-big">Ranking</div>
		<div class="header-small">Tutaj sprawdzisz listę najbogatszych osób.</div>
	</div>
<div class="ranking">

 <?php
$lp = 0;

$listar = mysql_query("SELECT * FROM `user` WHERE `ranga`<'4' ORDER BY `punkty` DESC") or die(mysql_error());
while ($row = mysql_fetch_row($listar)) {
    $lp++;
//TOP1
	if($lp==1) {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #FFD700;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';	
    } else if ($row[4] >= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #FFD700;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';
    }
}
//TOP2
	else if($lp==2) {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #C0C0C0;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';	
    } else if ($row[4] >= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #C0C0C0;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';
    }
}
//TOP3
	else if($lp==3) {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #cd7f32;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';	
    } else if ($row[4] >= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #cd7f32;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';
    }
}
//TOP4
else if($lp==4) {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #50c878;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';	
    } else if ($row[4] >= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #50c878;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';
    }
}
//TOP5
else if($lp==5) {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #50c878;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div><hr>';	
    } else if ($row[4] >= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja" style="color: #50c878;"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div><hr>';
    }
}
	else {
	 if ($row[4] <= 1) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url(brakavatara.png)"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login">'. $row[1] .'</div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';	
    } else if ($row[4]>= 2) {
		echo '<div class="miejsce">';
		echo '<div class="r_pozycja"> '. $lp .'. </div>';
		echo '<div class="r_avatar" style="background-image: url('. $row[14] .')"></div>';
		echo '<div class="r_left"> ';
		echo '<div class="r_uzytkownik">';
		echo '<div class="r_login" style="color: '. $row[15] .';">'. $row[1] .' <img src="vip.gif" width="16" height="16" /></div>';
		echo '<div class="r_firma"> '. $row[7] .'</span> </div>';
		echo '</div> </div>';
		echo '<div class="r_right">';
		echo '	<div class="r_klasa">Klasa '. $row[2] .'</div>';
		echo '	<div class="r_money" style="color: '. $row[15] .';"> '. $row[8] .'PKT</div>';
		echo '</div>';
		echo '</div>';
		}
	}
	
}
?>
</div>

</div>
<!-- KONIEC CONTAINER-->

  <?php include 'inc/footer.php';?>
</body>
</html>

<?php ob_end_flush();?>