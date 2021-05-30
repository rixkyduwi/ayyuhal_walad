<?php
$id = $_GET['id'];
$dataArtikel = TampilkanArtikelPerId($id);
while($row=mysqli_fetch_assoc($dataArtikel)) {
    $judul  = $row['judul'];
    $tanggal= date('d M Y g:i', strtotime($row['date']));
    $author = $row['username'];
    $gambar = $row['gambar'];
    $isi    = $row['isi'];
    $kategori= $row['nm_kategori'];
}
?>
<div class="main">
    <h1><?=$judul;?></h1>
    Diposting Pada : <time><?=$tanggal;?></time> <br>
    Ditulis Oleh : <i><?=$author;?></i> <br>
    Kategori : <i><?=$kategori;?></i>
    <hr>
    <img width="100%" height="100%" src="<?=$gambar;?>"><br>
    <hr>
    <p><?=$isi;?></p>
    <hr>
</div>