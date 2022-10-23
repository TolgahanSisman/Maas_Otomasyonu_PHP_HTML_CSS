<?php session_start() ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="adminpanelicss.css">
  <title>Admin Paneli</title>
</head>
<body>
	<?php
	if (!isset($_SESSION["ID"])) {
		echo("Giriş Yapınız..");
		echo '<a href = "giris_sayfasi.php"> Yönlendir </a>';
	}
	
	?>


  <ul class="menu" >
    <li class="pembe"><a href="personelarama.html">Personel Arama</a></li>
    <li class="mavi"><a href="personelekleme.html">Personel Ekleme</a></li>
    <li class="sari"><a href="personelsilme.html">Personel Silme</a></li>
    <li class="mor"><a href="personellist.php">Personel Listeleme</a></li>
    <li class="yesil"><a href="exit.php">Çıkış</a></li>
  </ul>

</body>
</html>