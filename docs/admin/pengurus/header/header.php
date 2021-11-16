<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: #fff;
        font-family: "Poppins", sans-serif;
    }

    span {
        font-size: 18px;
    }

    span,
    a {
        font-weight: 500;
        opacity: .8;
    }

    .wisata a {
        margin-top: .5em;
    }

    .wisata #wst {
        font-size: 16px;
        font-weight: 600;
    }


    li {
        margin: 1em 0;
        padding-left: 1.5em;
    }

    a {
        display: block;
    }

    .container {
        width: 20%;
        height: 100vh;
        background-color: #11101D;
    }

    ul {
        list-style-type: none;
        padding-top: 3em;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div class="container">
        <ul class="list">
            <li style="margin-bottom:2em">
                <a href="../index.php">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>Bio</span>
                </a>
            </li>
            <li class="wisata">
                <span id="wst">Spot</span>
                <a href="#">
                    <span class="wlist">Pintu Masuk</span>
                </a>
                <a href="#">
                    <span class="wlist">Jalanan Guci</span>
                </a>
                <a href="#">
                    <span class="wlist">UPTD</span>
                </a>
                <a href="#">
                    <span class="wlist">Pasar</span>
                </a>
                <a href="#">
                    <span class="wlist">Pasar Souvenir</span>
                </a>
                <a href="#">
                    <span class="wlist">Pancuran 13</span>
                </a>
                <a href="#">
                    <span class="wlist">Pancuran 5</span>
                </a>
                <a href="#">
                    <span class="wlist">Guciku</span>
                </a>
                <a href="#">
                    <span class="wlist">Pemandian Tertutup</span>
                </a>
                <a href="#">
                    <span class="wlist">Baron Hill</span>
                </a>
                <a href="#">
                    <span class="wlist">Geong</span>
                </a>
            </li>
            <br>
            <li>
                <a href="#">
                    <span>Admin</span>
                </a>
            </li>
            <li>
                <a href="../guci/logout.php">
                    <span>Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</body>

</html>