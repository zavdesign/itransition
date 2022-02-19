<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'task3');

    if (!$connect) {
        die('Error connect to DataBase');
    }