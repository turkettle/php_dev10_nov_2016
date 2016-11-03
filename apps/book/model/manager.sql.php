<?php

    /**
     * Créer un livre en BDD.
     */
    function create_book($book) {
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
    }

    /**
     * Récupère un livre en BDD en fonction de son ID.
     */
    function get_book($id) {

        global $db;
        $query = $db->prepare("
            SELECT *
            FROM book
            WHERE id=:id
        ");
        $query->bindValue(':id', $id);
        $execute = $query->execute();
        $book = $query->fetch(PDO::FETCH_ASSOC);
        return $book;
    }

    /**
     * Récupère plusieurs livre en BDD.
     */
    function get_books() {

        global $db;
        $query = $db->query("
            SELECT *
            FROM book
        ");
        $execute = $query->execute();
        $books = $query->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    /**
     * Récupère plusieurs livre en BDD.
     */
    function delete_book($id) {

        global $db;
        $query = $db->prepare("
            DELETE
            FROM book
            WHERE id=:id
        ");
        $query->bindValue(':id', $id);
        $execute = $query->execute();
    }

 ?>
