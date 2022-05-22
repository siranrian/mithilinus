<?php
    namespace MithApp;
    use MithApp\Nav\HorizontalNav;
    use MithApp\Nav\NavItem;

    require_once("./src/mith-app.php");

    $navItems = array(
        new NavItem("main_about","About Me",""),
        new NavItem("main_heartland","Heartland","")

    );

    $nav = new HorizontalNav($navItems);
?>