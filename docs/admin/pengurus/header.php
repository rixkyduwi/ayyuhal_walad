<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="header/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i style="cursor:pointer;" class='bx bx-menu'></i>
            <span class="logo_name">Sawah Batu</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="bio.php">
                    <i class='bx bx-map'></i>
                    <span class="link_name">Profil</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="bio.php">Profil</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Spot</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Spot</a></li>
                    <li><a href="info_gerbang.php">Gerbang Bukateja</a>
                    <li><a href="info_loket.php">Loket Pembayaran</a></li>
                    <li><a href="info_kebun_jagung.php">Kebun Jagung</a></li>
                    <li><a href="info_penangkaran_rusa.php">Penangkaran Rusa</a></li>
                    <li><a href="info_kolam_renang.php">Kolam Renang</a></li>
                    <li><a href="info_meeting_hall.php">Meeting Hall</a></li>
                    <li><a href="info_lapangan.php">Lapangan Terbuka</a></li>
                    <li><a href="info_pasar.php">Pasar Sawah Batu</a></li>
                    <li><a href="info_gazebo.php">Gazebo</a></li>
                </ul>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-user-circle'></i>
                    <span class="link_name">Daftar Admin</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="user.php">Daftar Admin</a></li>
                </ul>
            </li>
            <li>
                <a href="logout.php">
                    <i class='bx bx-exit'></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="logout.php">Logout</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!--section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
    </section-->

    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    </script>

</body>

</html>