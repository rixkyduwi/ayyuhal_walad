<?php 
session_start();
include "header.php";
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['tipe']==""){
	header("location:../index.php?alert=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../user/css/styles.css">
    <style>
    .main-admin {
        padding-left: 20%;
    }

    .cards {
        grid-column: 2 / span 12;
        display: grid;
        grid-template-columns: repeat(12, minmax(auto, 25px));
        grid-gap: 40px;
    }

    .card__image-container {
        width: 100%;
        padding-top: 100%;
        overflow: hidden;
        position: relative;
        border-radius: 15px 15px 0px 0px;
    }

    .text--medium {
        font-size: 14px;
        font-weight: 500;
        padding-bottom: 1em;
    }
    </style>
</head>

<body>
    <main class="main-admin" style="margin-top:-2em">
        <section class="cards" id="exp">
            <div class="card">
                <div class="card__image-container">
                    <a href="bio_kemadu.php">
                        <img src="../../user/images/sindangkemadu.jpg"
                            alt="Detailed image description would go here." /></a>
                </div>
                <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                    <p class="card__title text--medium">
                        Sindang Kemadu
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <a href="bio_cempaka.php">
                        <img src="../../user/images/cempaka.jpg" alt="Detailed image description would go here." /></a>
                </div>
                <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                    <p class="card__title text--medium">
                        Desa Cempaka
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <a href="bio_guci.php">
                        <img src="../../user/images/guci.jpg" alt="Detailed image description would go here." />
                    </a>
                </div>
                <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                    <p class="card__title text--medium">
                        Guci
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <a href="bio_sigedong.php">
                        <img src="../../user/images/sigedong.jpg" alt="Detailed image description would go here." />
                    </a>
                </div>
                <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                    <p class="card__title text--medium">
                        Sigedong
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <a href="bio_sawahbatu.php">
                        <img src="../../user/images/sawahbatu.jpg" alt="Detailed image description would go here." />
                    </a>
                </div>
                <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                    <p class="card__title text--medium">
                        Sawah Batu
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>