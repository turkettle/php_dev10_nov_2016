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
            $content = render_tpl('/apps/book/views/view_book.html.php', ['book' => $book]);
            render_page($content);
            break;
        case 'admin':
            $books = get_books();
            $content = render_tpl('/apps/book/views/admin.html.php', ['books' => $books]);
            render_page($content);
            break;
        case 'delete':
            if (isset($url['op']) && $url['op'] == 'delete') {
                delete_book($_POST['book_id']);
                header('Location: ' . $base_url . '?app=book&action=admin');
            } else {
                $book_id = $url['id'];
                $content = render_tpl('/apps/book/views/confirm_delete.html.php', ['book_id' => $book_id]);
                render_page($content);
            }
            break;
        default:
            die(include($base_path . '/404.html'));
            break;
    }
 ?>
