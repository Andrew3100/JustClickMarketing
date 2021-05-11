<?php
function get_records_sql($table,$condition)
{
    include 'database.php';
    if ($condition!='') {
        $sql = "SELECT * FROM `$table` WHERE $condition";
        $result = $mysqli->query($sql);


    }
    else {
        $sql = "SELECT * FROM `$table`";
        $result = $mysqli->query($sql);
    }
    return $result;
}

/*Что ввёл пользователь, пишем в переменные*/
$login    =  $_POST['user'];
$password =  $_POST['pass'];
$result = get_records_sql('users', "password = '$password' AND login = '$login' AND ban = 0");
$n = 0;
while ($result1 = mysqli_fetch_assoc($result)) {

    if (is_array($result1)) {
        $set = setcookie('user',$result1['login'],time() + 3600, "/");
        header('Location: index.php?voronka=1');

        exit();
        /*Установка куки на час*/
        //fixed_log('Авторизация в системе');
    }
}