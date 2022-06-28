<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Ostatnie Akcje | KoperAPP x SWW |</title>
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
		<div class="header-big">Transakcje</div>
		<div class="header-small">Ostatnie Transakcje wykonane przez użytkowników.</div>
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
<div class="tablediv">
     <table class="table">
  <thead>
    <tr>
      <th>Pseudonim</th>
	  <th>Imie Nazwisko</th>
	  <th>Hajs</th>
	  <th>Firma</th>
    </tr>
  </thead>
  <tbody>
  <?php
if($_GET['id'])
{
	$id = $_GET['id'];
	$zapytanie1 = mysql_query("SELECT * FROM `user` WHERE id=" . $id . "") or die(mysql_error());
	$wynik = mysql_fetch_row($zapytanie1);
	
	$zapytanie2 = mysql_query("SELECT * FROM `zgloszenia` WHERE login='" . $wynik[1] . "' ORDER BY id DESC LIMIT 35") or die(mysql_error()); 
	?>
	<tr>
	<td><?php echo $wynik[1]; ?></td>
	<td><?php echo $wynik[9]; ?> <?php echo $wynik[10]; ?></td>
	<td><?php echo $wynik[8]; ?> PKT</td>
	<td><?php echo $wynik[7]; ?></td>
	</tr>
  </tbody>
  
</table>
</div>

<div class="title"> Zaklady </div>
<?php
	$akcje = mysql_query("SELECT * FROM user WHERE login='".$_SESSION['login']."'"); 
    $lista = mysql_fetch_array($zapytanie); 
	?>
<div class="tablediv">
	<table class="table">
  <thead>
    <tr>
	  <th>Winner</th>
      <th>Wynik</th>
      <th>Postawiony Punkty</th>
	  <th>WIN Punkty</th>
	  <th>Data</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $lista2 = mysql_query("SELECT * FROM `zgloszenia` WHERE login='". $wynik[1]."'") or die(mysql_error());
  $ile =  mysql_num_rows($lista2);
  
  if($ile < 1)
  {
	echo '<tr>';
    echo '<td>Brak zakladow!</td>';
    echo '</tr>';
  }
  else
  {
  $lista = mysql_query("SELECT * FROM `zgloszenia` WHERE login='". $wynik[1]."' ORDER BY `id` DESC LIMIT 25") or die(mysql_error());
  while ( $row = mysql_fetch_row($lista) ) 
  {
	echo '<tr class="success">';
    echo '<td><i class="fa fa-user-tie"></i> ' . $row[5] . '</td>';
	echo '<td>' . $row[6] .'</td>';
	echo '<td><b>' . $row[7] . ' PKT</b></td>';
	echo '<td>' . $row[9] . ' PKT</td>';
	echo '<td>' . $row[2] . ' </td>';
    echo '</tr>';
	  }
  }?>
  
 </tbody>
  
</table>
</div>

 </div>
<?php } 
}?>
</div>
<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>