<?php
include('connect.php');

$dailylogin = "UPDATE user SET codzienne = '0'";
mysql_query($dailylogin) or die(mysql_error());
?>