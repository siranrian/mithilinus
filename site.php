<?php
    use Mithilinus;
    use Mithilinus\HorizontalNav;
    use Mithilinus\NavItem;

    require_once("./src/mith.php");

    $navItems = array(
        new NavItem("main_about","About Me",""),
        new NavItem("main_heartland","Heartland","")

    );

    $nav = new HorizontalNav($navItems);
?>