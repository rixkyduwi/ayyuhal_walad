<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'db/config.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = md5($_POST['password']);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($con,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['tipe']=="superadmin"){
		// berfungsi membuat session
		$_SESSION['nama_lengkap'] =  $data['nama_lengkap'];
		$_SESSION['tipe'] = "superadmin";
		//berfungsi mengalihkan ke halaman admin
		header("location:superadmin/index.php");
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['tipe']=="owner"){
		// berfungsi membuat session
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['tipe'] = "owner";
		// berfungsi mengalihkan ke halaman moderator
		header("location:owner/index.php");

    }else if($data['tipe']=="pengurus"){
		// berfungsi membuat session
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['tipe'] = "pengurus";
		// berfungsi mengalihkan ke halaman moderator
		header("location:pengurus/index.php");
    }
    else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:index.php?alert=gagal");
	}	
}else{
	header("location:index.php?alert=gagal");
}
?>