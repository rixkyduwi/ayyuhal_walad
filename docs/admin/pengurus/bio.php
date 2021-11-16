<?php
include('../db/config.php');

include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <style>
    body {
        background: #f5f6f8;
    }

    h2,
    h3,
    p,
    th,
    td {
        color: #333;
    }

    .bio {
        width: 50%;
        position: absolute;
        top: 5%;
        left: 25%;
    }

    .profil {
        width: 800px;
        height: auto;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
        padding: 3em;
    }
    </style>
</head>

<body>
    <div class="bio">
        <div class="title" style="display:flex;">
            <h2>Profil Wisata</h2>
        </div>


        <br>
        <div class="profil">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM bio_sawahbatu ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)) {
                        echo '
                            <div style="display:flex;justify-content:space-between">
                                <h3>'.$data['judul'].'</h3>
                                <a href="bio/edit_bio.php?id='.$data['id'].'">
                                <input type="submit" value="Edit"
                                    style="cursor:pointer;padding:.5em 1em;border:none;background:grey;border-radius:8px;">
                                </a>
                            </div>';
                        echo '<img src="images/'.$data['foto'].'" width="300" height="250" style="border-radius:12px;padding:1em 0">';
                        echo nl2br('<p class="p">'.$data['deskripsi'].'</p>');
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
    </div>

</body>

</html>