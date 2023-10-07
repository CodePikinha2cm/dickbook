<?php

    require_once './configPath.php';

    $pagina = SITE_ROOT . '/views/home.php';

    include_once 'views/header.php';

    if(isset($_GET['pagina'])){
        unset($pagina);
        $pagina = $_GET['pagina'];

    }

    include_once  $pagina;

    include_once 'views/footer.php';