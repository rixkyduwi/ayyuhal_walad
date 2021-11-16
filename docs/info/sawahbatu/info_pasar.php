<?php
include('../../admin/db/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
                $sql = mysqli_query($con, "SELECT * FROM sawahbatu_spot_pasar ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)) {
                        if ($data['id']=1){
                        echo '
                        <div class="container">
                            <div class="desc">
                            <div class="title">
                                <h2>'.$data['judul'].'</h2>
                            </div>
                            <img src="../../admin/sawahbatu/images/'.$data['foto'].'" width="300" height="250" style="border-radius:12px;padding:1em 0">
                            <p class="p">'.$data['deskripsi'].'</p>
                            </div>
                            ';
                        }
                        else{
                            echo '
                    <tr>
                        <td colspan="6">Input salah.</td>
                    </tr>
                    ';
                        }
                    }
                } else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
            ?>

</body>




</html>