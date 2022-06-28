<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1');
session_start(); //start sesji 
ob_start();

?>

    <html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
    <head>
        <title>Historia Zakładów | KoperAPP x SWW |</title>
        <?php include('inc/dane_head.php'); ?>
    </head>

    <body>
    <?php
    include('connect.php');
    include('inc/menu.php');

    if (empty($_SESSION['login'])) {
        header("Location: login.php");
    }
    ?>

    <div class="main-content">

        <div class="header">
            <div class="header-big">Historia Zakladów</div>
            <div class="header-small">Tutaj sprawdzisz swoje ostatnie zakłady.</div>
        </div>
		
        <?php
        $ranga = mysql_query("SELECT * FROM user WHERE login='" . $_SESSION['login'] . "'");
        $wynik = mysql_fetch_array($ranga);
        ?>
		
<div id="ostatnie-transakcje">
<div class="title"> Ostatnie</div>
<div class="ostatnie">
<?php
	$listaostatnie = mysql_query("SELECT * FROM `zgloszenia` WHERE login='" . $_SESSION['login'] . "' ORDER BY `id` DESC LIMIT 50") or die(mysql_error());
    
	while ($row = mysql_fetch_row($listaostatnie)) {
  
		if($row[8]==0){
							echo '<div class="transakcja">';
							echo '<div class="t_left">';
							echo '	<div class="t_title"> KoperLeague - Zakład </div>';
							echo '	<div class="t_login"> '. $row[5] .' '. $row[6] .' </div>';
							echo '</div>';
							echo '<div class="t_right">';
							echo '	<div class="t_data"> Trwa sprawdzanie...</div>';
							echo '	<div class="t_money" style="color: gray;"> -'. $row[7] .'PKT</div>';
							echo '</div>';
							echo '</div>';
		}
		else if($row[8]==1){
							echo '<div class="transakcja">';
							echo '<div class="t_left">';
							echo '	<div class="t_title"> Przegrana - Zakład </div>';
							echo '	<div class="t_login"> '. $row[5] .' '. $row[6] .' </div>';
							echo '</div>';
							echo '<div class="t_right">';
							echo '	<div class="t_data"> '. $row[2] .'</div>';
							echo '	<div class="t_money" style="color: red;"> -'. $row[7] .'PKT</div>';
							echo '</div>';
							echo '</div>';
		}
		else if($row[8]==2){
							echo '<div class="transakcja">';
							echo '<div class="t_left">';
							echo '	<div class="t_title"> Wygrana - Zakład </div>';
							echo '	<div class="t_login"> '. $row[5] .' '. $row[6] .' </div>';
							echo '</div>';
							echo '<div class="t_right">';
							echo '	<div class="t_data"> '. $row[2] .' </div>';
							echo '	<div class="t_money" style="color: green;"> +'. $row[9] .'PKT</div>';
							echo '</div>';
							echo '</div>';
			
		}
	}		
?>
</div>
</div>



</div>
    <!-- KONIEC CONTAINER-->
    <?php include('inc/footer.php'); ?>
    </body>
    </html>

<?php ob_end_flush(); ?>