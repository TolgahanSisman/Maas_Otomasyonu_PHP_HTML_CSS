<?php 
$server="localhost";
$username="root";
$password="";
$dbname="maas_otomasyonu";

$baglan=mysqli_connect("localhost","root","","maas_otomasyonu"); 
mysqli_set_charset($baglan, "utf8");

 $tc = $_POST['tc'];

 $sql="DELETE FROM personeltb WHERE TC='$tc'";
 $sonuc=mysqli_query($baglan,$sql);

 if ($sonuc==0)
     echo "Personel Silinemedi,Lütfen girdiğiniz bilgileri kontrol ediniz";
else
     echo "Personel Başarıyla Silindi.";
?>
 