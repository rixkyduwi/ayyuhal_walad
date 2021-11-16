<?php 
session_start();

include '../db/config.php';
include "header.php";

//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['tipe']==""){
	header("location:../superadmin/index.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <style>
    h2,
    a,
    td,
    th {
        color: #333;
    }

    a:hover {
        text-decoration: none;
    }

    #wrapper {
        width: 50%;
        position: absolute;
        top: 5%;
        left: 25%;
        border: 1px solid #333;
    }



    .homecard {
        width: 200px;
        box-shadow: 0px 6px 12px rgba(255, 155, 37, .3);
    }

    .card2 {
        box-shadow: 0px 6px 12px rgba(5, 196, 107, .3);
    }

    .card3 {
        box-shadow: 0px 6px 12px rgba(18, 137, 167, .3);
    }

    .card4 {
        box-shadow: 0px 6px 12px rgba(237, 76, 103, .3);
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <div class="list">
            <h2>Daftar Admin</h2>
            <a href="tambah.php">+ &nbsp; Tambah Admin</a>
            <br><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">Kata Sandi</th>
                    </tr>
                </thead>
                <?php

                $sql = mysqli_query($con, "SELECT * FROM admin WHERE tipe = 'superadmin'") or die(mysqli_error($con));

                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo '
                            <tbody>
                                <tr>
                                    <td class="p">'.$data['nama_lengkap'].'</td>
                                    <td class="p">'.$data['username'].'</td>
                                    <td class="p">'.$data['password'].'</td>
                                </tr>
                            </tbody>
                        ';
                        $no++;
                    }
                    } else{
                        echo '
                        <tr>
                            <td colspan="6">Tidak ada data.</td>
                        </tr>
                        ';
                    }
                ?>
            </table>
        </div>


    </div>

</body>

</html>