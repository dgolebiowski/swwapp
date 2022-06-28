<?php
//header('Content-type: text/html; charset=UTF-8');
ini_set('display_errors', '1'); 
session_start(); //start sesji 
ob_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<title>Kupony | KoperAPP x SWW |</title>
	<?php include('inc/dane_head.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/kupony.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
		<div class="header-big">Zniżki i kupony! </div>
		<div class="header-small">Wszystkie zniżki i kupony jakie posiadasz będąc uczniem LO1!
  </div>
	</div>

<section id="labels">
  <div class="container">
	<div class="row">
		
        <div class="col-sm-6 col-md-6">
          <div  class="dl">
            <div class="brand">
                <h2>TKALNIA ZAGADEK</h2>
            </div>
            <div class="discount kuponsww">
                10%
                <div class="type">
                    Zniżki na pokoje
                </div>
            </div>
            <div class="descr">
                <strong>
                    Chcesz rozwiązać jakieś zagadki? 
                </strong> 
                Mamy dla ciebie idealne miejsce - escape room Tkalnia Zagadek! Będąc uczniem LO1 otrzymujesz 10% zniżki na dowolny pokój!
            </div>
            <div class="ends">
                <small>
                   * Kupon ważny bezterminowo.
                </small>
            </div>
            <div class="coupon kuponsww">
                <a data-toggle="collapse" href="#code-2" class="open-code">Zdobądź kod</a>
                <div id="code-2" class="collapse in code">
                    Legitymacja LO1
                </div>
            </div>
          </div>
        </div>
        
		<div class="col-sm-6 col-md-6">
          <div  class="dl">
            <div class="brand">
                <h2>ZBITA SZYBKA</h2>
            </div>
            <div class="discount kuponsww">
                10-50%
                <div class="type">
                    Zniżki
                </div>
            </div>
            <div class="descr">
                <strong>
                    Pękła szybka w telefonie? 
                </strong> 
                Bez obaw! Kupisz sobie nową i to w bardzo dobrej cenie! Mamy dla ciebie zniżki na: Zwykłe Szkło (50%); Szkło Premium (30%); blabla..
            </div>
            <div class="ends">
                <small>
                   * Kupon ważny bezterminowo.
                </small>
            </div>
            <div class="coupon kuponsww">
                <a data-toggle="collapse" href="#code-3" class="open-code">Zdobądź kod</a>
                <div id="code-3" class="collapse in code">
                    Legitymacja LO1
                </div>
            </div>
          </div>
        </div>
		
		
	</div>
  </div>
</section>


</div>

<!-- KONIEC CONTAINER-->

  <?php include('inc/footer.php'); ?>
</body>
</html>

<?php ob_end_flush(); ?>