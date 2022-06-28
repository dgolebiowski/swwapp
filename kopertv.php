<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Nagrody | KoperAPP x SWW |</title>
	<?php include('inc/dane_head.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/colapps.css">
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

<div class="header-big">KoperTV </div>

<div class="header">
<br></br>
<button type="button" class="collapsible">Zakończenie Roku 2018/2019</button>
<div class="content">
 <br><iframe width="560" height="315" src="https://www.youtube.com/embed/gznhZYn8uYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br>
</div>
</div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script
		
		

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>


<?php ob_end_flush(); ?>