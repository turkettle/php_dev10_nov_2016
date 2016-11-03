<?php
    print '<pre>';var_dump($_POST); print '</pre>';

    $db = new PDO('mysql:host=127.0.0.1;dbname=aston', 'root', '');

    $book = $_POST;

    $query = $db->prepare("
        INSERT INTO book
        (title, author, body, published)
        VALUES (:title, :author, :body, :published)
    ");
    $query->bindValue(':title', $book['title']);
    $query->bindValue(':author', $book['author']);
    $query->bindValue(':body', $book['body']);
    $query->bindValue(':published', strtotime($book['published']));

    $execute = $query->execute();
//    print '<pre>'; var_dump($query->errorInfo()); print '</pre>';
//    print '<pre>'; var_dump($execute); print '</pre>';
?>