<?php
  include('../../db/config.php');

  if (isset($_GET['id'])) {

    $id = ($_GET["id"]);
    $query = "SELECT * FROM bio_sawahbatu WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($con).
         " - ".mysqli_error($con));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='../bio.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='../bio.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <title>Edit Info</title>
    <style>
    * {
        font-family: 'Lato';
    }

    .container {
        width: 60%;
        position: absolute;
        top: 5%;
        left: 10%;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Deskripsi Wisata</h2>
        <form method="POST" action="save_bio.php" enctype="multipart/form-data">
            <!-- menampung nilai id produk yang akan di edit -->
            <input name="id" value="<?php echo $data['id']; ?>" hidden />
            <div>
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" autofocus=""
                    required="" />
            </div><br>
            <div>
                <label>Deskripsi</label>
                <textarea class="ckeditor" id="ckeditor" style="padding:2em" name="deskripsi" cols="100" rows="5"
                    required><?php echo $data['deskripsi']; ?></textarea><br>
            </div><br>
            <div>
                <label>Foto Produk</label>
                <img src="../images/<?php echo $data['foto']; ?>" style="width: 200px;float: left;margin-bottom: 5px;">
                <input type="file" name="foto" />
                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar
                    produk</i>
            </div>
            <br>
            <div>
                <button class="btn" type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>

</html>