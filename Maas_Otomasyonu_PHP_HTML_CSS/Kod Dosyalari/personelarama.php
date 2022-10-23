<?php 
$server="localhost";
$username="root";
$password="";
$dbname="maas_otomasyonu";

$baglan=mysqli_connect("localhost","root","","maas_otomasyonu"); 
mysqli_set_charset($baglan, "utf8");

 $tc = $_POST['tc'];

 $sql="SELECT p.personelID, p.TC, p.ADI, p.SOYADI, p.DOGUMTARIHI, dy.dogumyeri, c.cinsiyet, mh.medeni_hal, un.Unvan, der.derece, k.kademe, fak.Fakulte, d.Departman,dil.Dil, p.MAAS FROM
personeltb p, cinsiyettb c, departmantb d, derece der, diltb dil, dogumyeritb dy, fakultetb fak, kademetb k, medenihaltb mh, unvantb un
WHERE p.cinsiyetID=c.cinsiyetID
AND p.DepartmanID=d.DepartmanID
AND p.dereceID=der.dereceID
AND p.DilID=dil.DilID
AND p.dogumyeriID=dy.dogumyeriID
AND p.FakulteID=fak.FakulteID
AND p.kademeID=k.kademeID
AND p.medeniID=mh.medeniID
AND p.UnvanID=un.UnvanID
AND TC='$tc'";
 $sonuc=mysqli_query($baglan,$sql);
 $sayac=0;

 while ($row = mysqli_fetch_array($sonuc)){
 	echo "<br><br><br><br><br>";	
    echo "<b> ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ADI &nbsp;&nbsp;&nbsp;	SOYADI &nbsp;&nbsp;&nbsp; DOĞUM TAR. &nbsp;&nbsp;&nbsp; DOĞUM YERİ &nbsp;&nbsp;&nbsp; CİNSİYET &nbsp;&nbsp;&nbsp; MEDENİ HAL &nbsp;&nbsp;&nbsp; ÜNVAN &nbsp;&nbsp;&nbsp; DERECE &nbsp;&nbsp;&nbsp; KADEME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FAKÜLTE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DEPARTMAN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DİL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MAAŞ </b>";
    echo "<br><br>";

 	echo  $row['personelID']."&nbsp;&nbsp;". "&nbsp;&nbsp;".$row['TC'] . " &nbsp;&nbsp;" ." &nbsp;&nbsp;". $row['ADI'].  " &nbsp;&nbsp;" ." ". $row['SOYADI'].  "&nbsp;&nbsp;&nbsp;&nbsp; " ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $row['DOGUMTARIHI'].  " &nbsp;&nbsp;" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $row['dogumyeri'].  " &nbsp;&nbsp;" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $row['cinsiyet'].  " &nbsp;&nbsp;" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $row['medeni_hal'].  " &nbsp;&nbsp;" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". $row['Unvan'].  " &nbsp;&nbsp;" ." ". $row['derece'].  " &nbsp;&nbsp;" ." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row['kademe'].  "&nbsp;&nbsp; " ." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row['Fakulte'].  "&nbsp;&nbsp; " ."&nbsp; ". $row['Departman'].  " &nbsp;&nbsp;" ."&nbsp;&nbsp; ". $row['Dil'].  "&nbsp;&nbsp; " ." ". $row['MAAS'];


        echo "<br>";

        $sayac++;
 }
echo ' </p> ';
if ($sayac == 0) 
{ 
    echo '<p> Böyle bir kayıt bulunamadı. </p><br><br>';

}


    mysqli_close($baglan);
    ?>
