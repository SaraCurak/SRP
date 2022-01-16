<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="C:\wamp64\www\IMS\pzi - projekt\images\korisnici\ana.jfif" alt="User image." id="userImage" />
                <span><?= $zaposlenik['ime'] . ' ' . $zaposlenik['prezime'] ?></span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists" id="dashboard_menu_lists">
                    <li>
                        <a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dollar"></i><span class="menuText"> Prihodi</span></a>
                    </li>
                    <li>
                        <a href="./user_add.php"><i class="fa fa-user-plus"></i><span class="menuText"> Dodaj korisnika</span></a>
                    </li>
                </ul>
            </div>
</div>