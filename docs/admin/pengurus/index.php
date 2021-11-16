<?php 
session_start();
include "header.php";
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['tipe']==""){
	header("location:index.php?alert=belum_login");
}
?>