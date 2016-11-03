<?php

    if (empty($_GET)) {
        $url['app'] = 'core';
        $url['action'] = 'home';
    } else {
        $url = $_GET;
    }

    if (!isset($url['app']) || !isset($url['action'])) {
      die(include($base_path . '/404.html'));
    }

?>
