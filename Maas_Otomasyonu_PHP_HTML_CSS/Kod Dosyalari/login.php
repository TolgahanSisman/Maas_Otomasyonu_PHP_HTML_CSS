<?php 
error_reporting(0);
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="maas_otomasyonu";

$conn = new mysqli($server, $username, $password, $dbname);
$new = mysqli_set_charset($conn,"utf8");
if ($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}

	if($_POST){
		$nickname = $_POST["nickname"];
		$password = $_POST["password"];

			$giris = "SELECT * FROM admintb WHERE nickname='$nickname' AND password='$password'";
			$getir = $conn->query($giris);
			if($getir->num_rows>0){
				while ($row = $getir->fetch_assoc()) {
					$_SESSION["ID"] = $row["adminID"];
					$_SESSION["nickname"] = $row["nickname"];
					header("location:adminpaneli.php");
				}
			}
	}

 ?>