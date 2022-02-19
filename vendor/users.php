<?php

    session_start();
    require_once('connect.php');

    function selectAllItems() {
        global $connect;
//        var_dump($connect);
        $sql = 'SELECT `id`, `full_name`, `login`, `email`, `password` FROM catalog';
        if (!$result = mysqli_query($connect, $sql))
            return false;
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $items;
    }
        function getUsers() {
        $users = 'SELECT * FROM users';
        var_dump(mysqli_fetch_all($users));
    }



