<?php

    function render_page($content) {
        global $base_path;
        global $base_url;
        include($base_path . '/apps/core/views/base.html.php');
    }

    function render_tpl($tpl, $args = []) {
        ob_start();
        global $base_path;
        global $base_url;
        include($base_path . $tpl);
        return ob_get_clean();
    }

 ?>
