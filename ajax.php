<?php

    // var_dump($_POST);
    $error = [];
    if (empty($_POST['title'])) {
        $error['title'] = 'Le champs titre est vide.';
    }
    print json_encode($error);
 ?>
