<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
<title>Lista Zakładów | KoperAPP x SWW |</title>
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
		<div class="header-big">Panel Meczy KoperLeague</div>
		<div class="header-small">Tutaj możesz sprawdzać zaklady.</div>
	</div>
<div class="title"> Mecze, ktore sie nie skonczyly:</div>
<div class="tablediv">
 <table class="table">
  <thead>
    <tr>
      <th>Mecz</th>
	  <th>Data</th>
	  <th>#</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $listaf = mysql_query("SELECT * FROM `gameskl` WHERE end='0'") or die(mysql_error());
  while ( $row = mysql_fetch_row($listaf) ) 
  {
    echo '<tr>';
    echo '<td>' . $row[3] . ' - '. $row[4] .'</td>';
	echo '<td>' . $row[5] . '</td>';
	echo '<td><a href="admin_zobaczmecz.php?id='. $row[0]. '"><i class="fa fa-edit"></i> Edytuj. </a></td>';
    echo '</tr>';
  }
	?>
  </tbody>
  
</table>
</div>

<div class="title"> Zakonczone Mecze:</div>
<div class="tablediv">
 <table class="table">
  <thead>
    <tr>
      <th>Mecz</th>
	  <th>Data</th>
	  <th>#</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $listaf = mysql_query("SELECT * FROM `gameskl` WHERE end='1' ORDER by id DESC LIMIT 3") or die(mysql_error());
  while ( $row = mysql_fetch_row($listaf) ) 
  {
    echo '<tr>';
    echo '<td>' . $row[3] . ' - '. $row[4] .'</td>';
	echo '<td>' . $row[5] . '</td>';
	echo '<td><a href="admin_zobaczmecz.php?id='. $row[0]. '"><i class="fa fa-edit"></i> Edytuj. </a></td>';
    echo '</tr>';
  }
	?>
  </tbody>
  
</table>
</div>

</div>
<?php } ?>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>