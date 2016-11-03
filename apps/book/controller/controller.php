<?php

    include($base_path . '/apps/book/model/manager.sql.php');

    switch ($url['action']) {
        case 'create':
            $content = render_tpl('/apps/book/views/add_book.html.php');
            render_page($content);
            break;
        case 'view':
            $book_id = $url['id'];
            $book = get_book($book_id);
            break;
        default:
            die(include($base_path . '/404.html'));
            break;
    }
 ?>
