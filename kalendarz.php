<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Kalendarz Eventów | KoperAPP x SWW |</title>
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

<div class="content">

<div class="header">
		<div class="header-big">Kalendarz </div>
		<div class="header-small">Wszystkie wydarzenia w naszej szkole.
  </div>
	</div>
	
<ul class="timeline">

<?php 
  $listaeventy = mysql_query("SELECT * FROM eventy ORDER BY `id` ASC") or die(mysql_error());

  while ( $row = mysql_fetch_row($listaeventy) ) 
  {
	  if($row[4]==1) {
		  
	  echo '<li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">'. $row[2] .'</span>
        <span class="time-wrapper"><span class="time">'. $row[1] .'</span></span>
      </div>
	    <div class="desc">'. $row[3] .'</div>
    </div>
  </li>';
	  }
	else 
	{
	echo '<li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="hexa"></span>
        <span class="flag">'. $row[2] .'</span>
        <span class="time-wrapper"><span class="time">'. $row[1] .'</span></span>
      </div>
	    <div class="desc">'. $row[3] .'</div>
    </div>
  </li>';	
	}
  }
  
?>

  
</ul>


</div>

<!-- KONIEC CONTAINER-->

<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>