<?php

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if (empty($_GET)) {
                $url['app'] = 'core';
                $url['action'] = 'home';
            } else {
                $url = $_GET;
            }
            break;
        case 'POST':
            $url = $_REQUEST;
            break;
    }

    if (!isset($url['app']) || !isset($url['action'])) {
      die(include($base_path . '/404.html'));
    }

?>
