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
            <span class="logo_name">Guci</span>
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
                    <li><a href="info_uptd.php">UPTD</a>
                    <li><a href="info_pasar.php">Pasar</a></li>
                    <li><a href="info_pasar_suvenir.php">Pasar Suvenir</a></li>
                    <li><a href="info_pancuran13.php">Pancuran 13</a></li>
                    <li><a href="info_pancuran5.php">Pancuran 5</a></li>
                    <li><a href="info_guciku.php">Guciku</a></li>
                    <li><a href="info_pemandian.php">Pemandian Tertutup</a></li>
                    <li><a href="info_baron.php">Baron Hill</a></li>
                    <li><a href="info_geong.php">Geong</a></li>
                    <li><a href="info_jeep_adventure.php">Jeep Adventure</a></li>
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
