<?php
include('admin/db/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Cempaka</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="css/styleblog.css">
<style>
    .wrap{
        background-color: black;
    }
    #ftco-navbar{
        background-color:black;
    }
    #ftco-nav{
        background-color:black;
    }
    </style>
</head>

<body>
    <?php 
    include ('heading.html');
    include ('nav.html');
    ?>
        <div class="tour-info" style="margin-top:50px">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM blog ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = $_POST['id'];;
                    while($data = mysqli_fetch_assoc($sql)) {
                        echo '
                            <center>
                                <h3>'.$data['judul'].'</h3>
                            <br>
                            <img class="profilimg" style="border-radius:12px;" src="../../admin/cempaka/images/'.$data['foto'].'" style="border-radius:12px;padding:1em 0">
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
<?php
include ('footer.html');
?>