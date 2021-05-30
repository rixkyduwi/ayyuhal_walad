<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Websaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
        <meta name="author" content="ADD AUTHOR INFORMATION">
        <meta name="robots" content="index, follow">
 
        <!-- icons -->
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
 
        <!-- Override CSS file - add your own CSS rules -->
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="header-heading">Websaya</h1>
            </div>
            <div class="nav-bar">
                <ul class="nav">
                    <li><a href="<?=$baseurl;?>">Homepage</a></li>
                    <?php
                    $semuakategori = TampilkanSemuaKategori();
                    while ($row=mysqli_fetch_assoc($semuakategori)) {
                    ?>
                    <li><a href="<?=$baseurl;?>index.php?p=perkategori&id=<?=$row['id_kategori'];?>"><?=$row['nm_kategori'];?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="content">