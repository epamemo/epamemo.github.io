<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "tutor_crud";

$db = mysqli_connect($server,$user,$password,$nama_database);
if (!$db) {
	die("Yah dia ga bisa dihubungin.. lagi sibuk sama yang lain kali ya :(" . mysqli_connect_error());
}
 ?>