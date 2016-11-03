<?php

    switch ($url['action']) {
        case 'home':
            $content = render_tpl('/apps/core/views/main_content.html.php');
            render_page($content);
            break;
        default:
            die(include($base_path . '/404.html'));
            break;
    }
 ?>
