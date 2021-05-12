<?php

$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'jc_database'; // Имя БД

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
$mysqli->set_charset("utf8");