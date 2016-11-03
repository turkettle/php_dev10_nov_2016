<?php

    $base_path = __DIR__;
    $base_url = $_SERVER['HTTP_REFERER'];

    include($base_path . '/apps/core/commons.php');

    include($base_path . '/apps/core/controller/router.php');

    $controller = $base_path . '/apps/' . $url['app'] . '/controller/controller.php';
    if (file_exists($controller)) {
      include($controller);
    } else {
      die(include($base_path . '/404.html'));
    }

?>
