<?php 
include("veritabanibaglama.php");

$sorgu= $conn->prepare('SELECT p.personelID, p.TC, p.ADI, p.SOYADI, p.DOGUMTARIHI, dy.dogumyeri, c.cinsiyet, mh.medeni_hal, un.Unvan, der.derece, k.kademe, fak.Fakulte, d.Departman,dil.Dil, p.MAAS FROM
personeltb p, cinsiyettb c, departmantb d, derece der, diltb dil, dogumyeritb dy, fakultetb fak, kademetb k, medenihaltb mh, unvantb un
WHERE p.cinsiyetID=c.cinsiyetID
AND p.DepartmanID=d.DepartmanID
AND p.dereceID=der.dereceID
AND p. DilID=dil.DilID
AND p. dogumyeriID=dy.dogumyeriID
AND p.FakulteID=fak.FakulteID
AND p.kademeID=k.kademeID
AND p.medeniID=mh.medeniID
AND p.UnvanID=un.UnvanID
ORDER BY p.personelID');
$sorgu->execute();
$personellist=$sorgu->fetchAll(PDO::FETCH_OBJ);

 ?>

<html lang="tr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Personel Listesi</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  	
    <div class="container">
  		<div class="row justify-content-center">
  			<div class="col">
  				<table class="table table-bordered table-striped table-white">
            <thead class="thead-dark">
  					<tr>
  						<th>ID</th>
  						<th>TC Kimlik</th>
  						<th>Ad</th>
  						<th>Soyad</th>
  						<th>Doğum Tarihi</th>
              <th>Doğum Yeri</th>
              <th>Cinsiyet</th>
              <th>Medeni Hal</th>
              <th>Ünvan</th>
              <th>Derece</th>
              <th>Kademe</th>
              <th>Fakülte</th>
              <th>Dep.</th>
              <th>Dil</th>
              <th>Maaş</th>
  					</tr>
            </thead>
            <tbody>
  					<?php
  					foreach($personellist as $person){?>

  					<tr>
  					 	<td><?= $person->personelID ?></td>
  					 	<td><?= $person->TC ?></td>
  					 	<td><?= $person->ADI ?></td>
  					 	<td><?= $person->SOYADI ?></td>
  					 	<td><?= $person->DOGUMTARIHI ?></td>
              <td><?= $person->dogumyeri ?></td>
              <td><?= $person->cinsiyet ?></td>
              <td><?= $person->medeni_hal ?></td>
              <td><?= $person->Unvan ?></td>
              <td><?= $person->derece ?></td>
              <td><?= $person->kademe ?></td>
              <td><?= $person->Fakulte ?></td>
              <td><?= $person->Departman ?></td>
              <td><?= $person->Dil ?></td>
              <td><?= $person->MAAS ?>TL</td>
  					</tr>
            <tbody>


  					 <?php } ?>
  					
  				</table>
  				
  			</div>
  		</div>
  	</div>

  </body>
</html>