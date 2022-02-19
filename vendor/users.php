<?php

    session_start();
    require_once 'connect.php';

    function getUsers() {
        $users = 'SELECT * FROM users';
        var_dump(mysqli_fetch_all($users));
    }



