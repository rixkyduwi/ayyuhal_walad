<?php
  include('../../../db/config.php');

  $id = $_POST['id'];
  $nama = $_POST['judul'];
  $link = $_POST['deskripsi'];
  $gambar_produk = $_FILES['foto']['name'];

  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); 
    $x = explode('.', $gambar_produk); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../images/'.$nama_gambar_baru); 

                   $query  = "UPDATE sawahbatu_spot_jagung SET foto = '$nama_gambar_baru', judul = '$nama', deskripsi = '$link'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($con, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='../../info_uptd.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../edit_info/edit_info_uptd.php';</script>";
              }
    } else {
      $query  = "UPDATE sawahbatu_spot_jagung SET judul = '$nama', deskripsi = '$link'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($con, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                             " - ".mysqli_error($con));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='../../info_uptd.php';</script>";
      }
    }

 