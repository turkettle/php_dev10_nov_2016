<?php

    $base_path = __DIR__;
    $base_url = 'http://' . $_SERVER['HTTP_HOST'];
    $db = new PDO('mysql:host=127.0.0.1;dbname=aston', 'root', '');

    include($base_path . '/apps/core/commons.php');

    include($base_path . '/apps/core/controller/router.php');

    $controller = $base_path . '/apps/' . $url['app'] . '/controller/controller.php';
    if (file_exists($controller)) {
      include($controller);
    } else {
      die(include($base_path . '/404.html'));
    }

?>
