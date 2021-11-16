<?php
include('../../admin/db/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sawah Batu</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
    <div class="wrapper">
        <nav class="nav-ds position-fixed navbar navbar-expand-lg ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Eksplor</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="tour-info">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM bio_sawahbatu ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)) {
                        echo '
                            <center>
                                <h3>'.$data['judul'].'</h3>
                            <br>
                            <img class="profilimg" style="border-radius:12px;" src="../../admin/sawahbatu/images/'.$data['foto'].'" style="border-radius:12px;padding:1em 0">
                            <a href="../../vt_sawah_batu/sawahbatu/index.html"><br><br>
                            <input type="submit" class="tourbtn" value="Mulai Tur">
                            </a>
                            </center>
                            ';
                        echo nl2br('<p class="p tourp" style="margin-bottom:-2em;text-align:justify;text-justify: inter-word;">'.$data['deskripsi'].'</p>');
                    }
                } else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
            ?>
        </div>
        <center>
            <hr style="width:70%">
        </center>

        <div class="map">
            <div class="title d-flex">
                <h2>Peta Lokasi</h2>
                <div class="card__info">
                    <a target="_blank"
                        href="https://www.google.com/maps/dir//W428%2BQ83+Sawah+batu,+Sawah,+Bukateja,+Kec.+Balapulang,+Tegal,+Jawa+Tengah+52464/@-7.0981183,109.1136062,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e6f95b116f6a7a3:0x353a958eb6301297!2m2!1d109.1157949!2d-7.0981236">
                        <p class="card__price text--medium">Lihat Rute</p>
                    </a>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2403396259924!2d109.11360621421343!3d-7.098118271560977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f95b116f6a7a3%3A0x353a958eb6301297!2sSawah%20batu!5e0!3m2!1sid!2sid!4v1634477979908!5m2!1sid!2sid"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <nav class="nav-mb position-fixed fixed-bottom navbar navbar-expand-lg ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Eksplor</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?php
    include "../../footer.php";
    ?>
</body>
<script src="../user/js/wow.js"></script>
<script>
new WOW().init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/fontawesome.js"></script>


</html>