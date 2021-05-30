<div class="main">
    <?php
    $id = $_GET['id'];
    $dataArtikel = TampilkanSemuaArtikelByKategori($id);
    while($row=mysqli_fetch_assoc($dataArtikel)){
        ?>
        <div>
            <a href="<?=$baseurl;?>index.php?p=artikel&id=<?=$row['id_konten'];?>"><h3><?=$row['judul'];?></h3></a>
            <p><img src="<?=$row['gambar'];?>" width="100px" height="100px" style="float:left; margin-right: 8px;"><?=excerpt($row['isi']);?></p>
            <hr>
        </div>
        <?php } ?>
    </div>