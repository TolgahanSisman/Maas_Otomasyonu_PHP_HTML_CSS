<?php 
$server="localhost";
$username="root";
$password="";
$dbname="maas_otomasyonu";

$baglan=mysqli_connect("localhost","root","","maas_otomasyonu"); 
mysqli_set_charset($baglan, "utf8");

 $tc = $_POST['tc'];
 $isim = $_POST['ad'];
 $soyisim = $_POST['soyad'];
 $dtarihi = $_POST['dogumtarihi'];
 $dyeri = $_POST['dogumyeri'];
 $cins= $_POST['cinsiyet'];
 $mhal= $_POST['medenihal'];
 $unv= $_POST['unvan'];
 $der= $_POST['derece'];
 $kad= $_POST['kademe'];
 $fak= $_POST['fakulte'];
 $dep= $_POST['departman'];
 $dil= $_POST['dil'];
 $para= $_POST['maas'];

 $sql="INSERT INTO `personeltb` (`TC`, `ADI`, `SOYADI`, `DOGUMTARIHI`, `dogumyeriID`, `cinsiyetID`, `medeniID`, `UnvanID`, `dereceID`, `kademeID`, `FakulteID`, `DepartmanID`, `DilID`,MAAS) VALUES ('$tc', '$isim', '$soyisim', '$dtarihi', '$dyeri', '$cins', '$mhal', '$unv', '$der', '$kad', '$fak', '$dep','$dil','$para')";
 $sonuc=mysqli_query($baglan,$sql);

 if ($sonuc==0)
     echo "Personel Eklenemedi,Lütfen girdiğiniz bilgileri kontrol ediniz";
else
     echo "Personel Başarıyla eklendi";
?>
 