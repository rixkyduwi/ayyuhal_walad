<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font: 14px sans-serif;
    }

    body {
        font: 14px sans-serif;
        background: #f5f6f8;
    }

    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 450px;
        padding: 4em;
        border-radius: 8px;
        background: #fff;
    }

    .sign {
        background: #FF9B25;
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Halaman Masuk Admin</h2>
        <br>
        <?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<p>Maaf! Username & Password Salah.</p>";
		}else if($_GET['alert']=="belum_login"){
			echo "<p>Anda Harus Login Terlebih Dulu!</p>";
		}else if($_GET['alert']=="logout"){
			echo "<p>Anda Telah Logout!</p>";
		}
	}
	?>

        <form action="aksi.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username .." required="required">
            </div>
            <div class="form-group">
                <label>Kata Sandi</label>
                <input type="password" class="form-control" name="password" placeholder="Password .."
                    required="required">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="tombol_login btn sign" value="login">
            </div>

        </form>
    </div>

</body>

</html>