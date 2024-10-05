<?php

require_once 'db.php';

if (!empty($_GET['id_member'])) {
    $id = (int) $_GET['id_member'];

    $delete = "DELETE FROM `team` WHERE `team`. `id` = $id";
    $query = mysqli_query($db, $delete);
    if ($query) {
        header('Location: /WP/');
    }
    // else{
    //     die('Ошибка');
    // }
}