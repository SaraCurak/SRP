<?php

    session_start();
    if(!isset($_SESSION['zaposlenik'])) header('location: login.php');
    $zaposlenik = $_SESSION['zaposlenik'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div class="dashboard_maincontainer">

        
        <div class="dashboard_topNav">
            <a href="" id="menuButton"><i class="fa fa-navicon"></i></a>
            <a href="database/logout.php" id="logoutButton"><i class="fa fa-power-off"></i>Odjavi se</a>
        </div>

        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="C:\wamp64\www\IMS\pzi - projekt\images\korisnici\ana.jfif" alt="User image." id="userImage" />
                <span><?= $zaposlenik['ime'] . ' ' . $zaposlenik['prezime'] ?></span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists" id="dashboard_menu_lists">
                    <li>
                        <a href=""><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dollar"></i><span class="menuText"> Prihodi</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-book"></i><span class="menuText"> Podaci</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
        </div>


    </div>
<script>
    var sideBarIsOpen='true';
    menuButton.addEventListener('click', (event) => {
        event.preventDefault();

        if(sideBarIsOpen){
        dashboard_sidebar.style.width = '15%';
        dashboard_sidebar.style.transition = '0.5s all';
        dashboard_content_container.style.width='70%';
        dashboard_logo.style.font='60px';
        userImage.style='60px';

        menuIcons = document.getElementsByClassName('menuText');
        for(var i=0; i < menuIcons.lenght;i++){
            menuIcons[i].style.display = 'none';
        }
        

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
        sideBarIsOpen = false;}

        else {
        dashboard_sidebar.style.width = '20%';
        dashboard_content_container.style.width='80%';
        dashboard_logo.style.font='80px';
        userImage.style='80px';

        menuIcons = document.getElementsByClassName('menuText');
        for(var i=0; i < menuIcons.lenght;i++){
            menuIcons[i].style.display = 'none';
        }
        

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
        sideBarIsOpen = true;   
        }
    });
</script>
</body>
</html>