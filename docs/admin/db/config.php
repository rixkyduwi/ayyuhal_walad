<?php
$con = mysqli_connect("localhost","root","","liim");

if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke Database: " . mysqli_connect_error();
}
?>