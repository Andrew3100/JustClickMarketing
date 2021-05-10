<?php

function get_records_sql($table,$condition,$print = 0)
{
    include 'database.php';
    if ($condition!='') {
        $sql = "SELECT * FROM `$table` WHERE $condition";
        $result = $mysqli->query($sql);
        if (($print) == 1) {
            print_r($sql);
        }

    }
    else {
        $sql = "SELECT * FROM `$table`";
        $result = $mysqli->query($sql);
        if (($print) == 1) {
            print_r($sql);
        }
    }
    return $result;
}

$balance_google = $_POST['balance_google'];
$limit_google = $_POST['limit_google'];
$balance_yandex = $_POST['balance_yandex'];
$limit_yandex = $_POST['limit_yandex'];
$user = $_COOKIE['user'];
include 'database.php';

if (isset($balance_user) AND isset($limit_google)) {
    $user_id = get_records_sql('users',"login = '$user' AND service = 'google'",1);

    while ($user_id1 = mysqli_fetch_assoc($user_id)) {
        echo ($id = $user_id1['id']);
    }

    $sql = "UPDATE balances_info SET balance = '$balance_google',  day_limit = '$limit_google' WHERE user_id = $id";
    $update = $mysqli->query($sql);
    print_r($sql);

}

if (isset($balance_yandex) AND isset($limit_yandex)) {
    $user_id = get_records_sql('users',"login = '$user' AND service = 'yandex'",1);

    while ($user_id1 = mysqli_fetch_assoc($user_id)) {
        echo ($id = $user_id1['id']);
    }

    $sql = "UPDATE balances_info SET balance = '$balance_yandex',  day_limit = '$limit_yandex' WHERE user_id = $id";
    $update = $mysqli->query($sql);
    print_r($sql);

}

