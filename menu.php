<div class="menu-gorne">
	<a href="index.php"><div class="logo-top"><span class="lg-b">KOPER</span><span class="lg-c">APP</span></div></a>
	
	<div class="menu-bar">
	<span style="font-size:30px;cursor:pointer" onclick="openNavMenu()"><i class="fa fa-bars"></i></span>
	</div>
	<div class="user-bar">
	<span style="font-size:30px;cursor:pointer" onclick="openNavUser()"><i class="far fa-user-circle"></i></span>
	</div>
</div>

<?php
		$zapytanie = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
		$wynik = mysql_fetch_array($zapytanie); 
?>

<div id="Menu" class="nawigacja">
	<li><a href="javascript:void(0)" class="closebtn" onclick="closeNavMenu()">&times;</a>
	
	<div class="logo-menu">
	<a href="index.php">
	<div class="logo-menu-img"><img src="img/logo.png" height="50px"></div>
	<div class="logo-menu-txt"><span class="lg-b">KOPER</span><span class="lg-c">APP</span></div>
	</a>
	</div>
	
	<li><a href="aktualnosci.php"><i class="far fa-newspaper"></i> Aktualności</a></li>
	<li><a href="plany.php"><i class="far fa-newspaper"></i> Plany Lekcji</a></li>
	<li><a href="koperleague.php"><i class="fas fa-futbol"></i> KoperLeague</a></li>
	<li><a href="ekoperleague.php"><i class="fas fa-headset"></i> E-KoperLeague</a></li>
	<li><a href="nagrody.php"><i class="fas fa-gifts"></i> Nagrody</a></li>
	<li><a href="kupony.php"><i class="fas fa-hand-holding-heart"></i> Zniżki/Kupony</a></li>
	<li><a href="soon.php"><i class="fas fa-person-booth"></i> More Soon</a></li>
	<?php 
	$dostepfirmy= mysql_query("SELECT * FROM `firmy` WHERE prezes='" . $_SESSION['login'] ."'");
$dostepfirmy2= mysql_query("SELECT * FROM `firmy` WHERE vice='" . $_SESSION['login'] ."'"); 
	
		if( (mysql_num_rows($dostepfirmy)) == 1 || (mysql_num_rows($dostepfirmy2)) == 1)
		{
			echo '<li><a href="panel_druzyna.php" ><i class="fa fa-star"></i> Panel Drużyny</a></li>';
		}
		if ($wynik['ranga']>=1)
		{
		echo '<li><a href="panel_przewodniczacy.php"><i class="fa fa-star"></i> Panel Przewodniczącego</a></li>';
		}
		if ($wynik['ranga']>=2)
		{
		echo '<li><a href="panel_administrator.php"><i class="fa fa-star"></i> Panel Administratora</a></li>';
		}
	?>
	
	<div class="dol">
		<li><a href="informacje.php">Informacje</a></li>
		<li><a href="administratorzy.php">Administratorzy</a></li>
		<li><a href="https://www.facebook.com/pg/kornik">Ko[ ]rnik</a></li>
	</div>
</div>


<div id="User" class="nawigacja2">
	<li><a href="javascript:void(0)" class="closebtn" onclick="closeNavUser()">&times;</a>
	
	<div class="logo-menu">
	<a href="index.php">
	<div class="logo-menu-img"><img src="img/logo.png" height="50px"></div>
	<div class="logo-menu-txt"><span class="lg-b">KOPER</span><span class="lg-c">APP</span></div>
	</a>
	</div>
	
	
	<li><span class="user-login"><?php echo $wynik['login']; ?></span></li>
	<?php 
		if ($wynik['ranga']==0)
		{
		echo '<li><span class="user-acc"> Zwykły Użytkownik</li>';
		}
		else if ($wynik['ranga']==1)
		{
		echo '<li><span class="user-acc"> <img src="vip.gif"> Przewodniczący</li>';
		}
		else if ($wynik['ranga']>=2)
		{
		echo '<li><span class="user-acc"> ADMINISTRATOR</li>';
		}
	?>
	<br>
	<?php
	$zapytanie2 = mysql_query("SELECT * FROM wiadomosc WHERE do='".$_SESSION['login']."' AND przeczytane='0'"); 
		$ile = mysql_num_rows($zapytanie2);
		
	if($ile > 0)
	{
?>
	<div class="wiadomosc">
		<div class="wiadomosc-big"> Masz nową wiadomość! </div>
		<div class="wiadomosc-small"><a href="wiadomosci.php">Kliknij tutaj aby ją zobaczyć!</a></div>
	</div>
	<?php } ?>
	<br>
	<li><i class="fa fa-dollar-sign"></i> Twój stan konta: <span class="lg-c"><?php echo $wynik['punkty']; ?> PKT</span></li>
	<li><i class="fa fa-users"></i> Twoja klasa: <span class="lg-c"><?php echo $wynik['klasa']; ?></span></li>
	<li><i class="fa fa-building"></i> Drużyna KoperLeague: <span class="lg-c"><?php echo $wynik['firma']; ?></span></li>
	<li><i class="fa fa-building"></i> Drużyna E-KoperLeague: <span class="lg-c"><?php echo $wynik['firma']; ?></span></li>

	<div class="dol"><a href="wyloguj.php">Wyloguj się.</a><br>
	<li><a href="/"><span class="lg-b">POL</a></span></li>
	<li><a href="/eng/"><span class="lg-b">ANG</a></span></li>
	</div>
	

</div>

<!-- KONIEC MENU  -->