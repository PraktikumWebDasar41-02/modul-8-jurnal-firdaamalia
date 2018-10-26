<?php 

$server = "localhost";
$user="root";
$pass="";
$db="modul8";

$conek =mysqli_connect($server, $user, $pass)
		or die ("gagal konek database".mysqli_error());

$dbna = mysqli_select_db($db)
		or die =("gagal masuk database". mysqli_error());

 ?>


