<!DOCTYPE html>
<?php

use MithApp;
    require_once("site.php");
    require_once("./src/mith-app.php");
    $app = new MithApp();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mithilinus | Erik Moffett</title>
</head>
<body>
    <header>
        <nav>
            <?php
                
                $app::getNav();
            ?>
        </nav>
    </header>
</body>
</html>