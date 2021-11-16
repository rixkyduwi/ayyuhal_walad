<?php
    include "admin/db/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Tour Wisata Kabupaten Tegal</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/animate.css">
    <link rel="stylesheet" href="user/css/fontawesome.css">
    <link rel="stylesheet" href="user/css/styles.css">
</head>

<body>
    <div class="wrapper">
        <nav class="position-absolute navbar navbar-expand-lg ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="cari.php">Eksplor</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>

<input type="text" hint="cari virtual tour">
<button type="submit"></button>
</div>
        <div class="card" style="visible:none">
                        <div class="card__image-container">
                            <a href="user/deskripsi/sindang.php">
                                <img src="user/images/sindangkemadu.jpg"
                                    alt="Detailed image description would go here." /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Sindang Kemadu
                            </p>
                            <div class="card__info">
                                <a href="user/deskripsi/sindang.php">
                                    <p class="card__price text--medium">Mulai Tur</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/cempaka.php">
                                <img src="user/images/cempaka.jpg"
                                    alt="Detailed image description would go here." /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Desa Cempaka
                            </p>
                            <div class="card__info">
                                <a href="vt_cempaka/index.html">
                                    <p class="card__price text--medium">Mulai Tur</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/guci.php">
                                <img src="user/images/guci.jpg" alt="Detailed image description would go here." />
                                <a href="user/deskripsi/cempaka.php">
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Guci
                            </p>
                            <div class="card__info">
                                <a href="user/deskripsi/guci.php">
                                    <p class="card__price text--medium">Mulai Tur</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/sigedong.php">
                                <img src="user/images/sigedong.jpg" alt="Detailed image description would go here." />
                                <a href="user/deskripsi/cempaka.php">
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Sigedong
                            </p>
                            <div class="card__info">
                                <a href="user/deskripsi/sigedong.php">
                                    <p class="card__price text--medium">Mulai Tur</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/sawahbatu.php">
                                <img src="user/images/sawahbatu.jpg" alt="Detailed image description would go here." />
                                <a href="user/deskripsi/cempaka.php">
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Sawah Batu
                            </p>
                            <div class="card__info">
                                <a href="user/deskripsi/sawahbatu.php">
                                    <p class="card__price text--medium">Mulai Tur</p>
                                </a>
                            </div>
                        </div>
                    </div>
        <?php
    include "footer.php";
    ?>
</body>
</html>