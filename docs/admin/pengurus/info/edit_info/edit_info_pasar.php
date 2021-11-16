<?php
  include('../../../db/config.php');


  if (isset($_GET['id'])) {

    $id = ($_GET["id"]);
    $query = "SELECT * FROM sawahbatu_spot_pasar WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($con).
         " - ".mysqli_error($con));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='../../info_pasar.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='../../info_pasar.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="../../../css/info.css">
    <title>Edit Info</title>
</head>

<body>
    <div class="container">
        <h2>Edit Info</h2>
        <form method="POST" action="../save_info/save_info_pasar.php" enctype="multipart/form-data">
            <!-- menampung nilai id produk yang akan di edit -->
            <input name="id" value="<?php echo $data['id']; ?>" hidden />
            <div>
                <label>Judul</label><br>
                <input style="margin-top:.5em" class="form-control" type="text" name="judul"
                    value="<?php echo $data['judul']; ?>" autofocus="" required="" />
            </div><br>
            <div>
                <label style="margin-bottom:.5em">Deskripsi</label>
                <textarea class="ckeditor" id="deskripsi" style="padding:2em" name="deskripsi" cols="100" rows="5"
                    required><?php echo $data['deskripsi']; ?></textarea><br>
            </div><br>
            <div style="display:flex">
                <img src="../../images/<?php echo $data['foto']; ?>" style="width: 200px;margin-bottom: 5px;">
                <div style="margin-left:1em;">
                    <label>Foto</label><br><br>
                    <input type="file" name="foto" /><br>
                    <i style=" margin-left:1em;font-size: 14px;color: red">Abaikan jika tidak merubah gambar</i>
                </div>

            </div>

            <br>
            <div>
                <button class="btn savebtn" type="submit">Simpan Perubahan</button>
                <a href="../../info_pasar.php"></a>
                <button class="backbtn" type="submit">Kembali</button>
            </div>
        </form>
    </div>
</body>
<script>
CKEDITOR.replace('deskripsi', {
    height: 300,
    filebrowserUploadUrl: "upload.php"
});
</script>

</html>