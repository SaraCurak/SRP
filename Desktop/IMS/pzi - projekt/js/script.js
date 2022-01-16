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