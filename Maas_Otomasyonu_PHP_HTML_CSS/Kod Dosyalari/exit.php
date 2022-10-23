<?php 
session_start();
unset($_SESSION["adminID"]);
header("location:giris_sayfasi.php")
 ?>