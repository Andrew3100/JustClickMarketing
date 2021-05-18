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

function pre($object) {
    echo '<pre>';
    var_dump($object);
    echo '</pre>';
}

$balance_google = $_POST['balance_google'];
$limit_google = $_POST['limit_google'];
$balance_yandex = $_POST['balance_yandex'];
$limit_yandex = $_POST['limit_yandex'];
$user = $_COOKIE['user'];
include 'database.php';

if (isset($balance_google) AND isset($limit_google)) {
    $user_id = get_records_sql('users',"login = '$user'");
    while ($user_id1 = mysqli_fetch_assoc($user_id)) {
         ($id = $user_id1['id']);
    }

    $sql = "UPDATE balances_info SET balance = '$balance_google',  day_limit = '$limit_google' WHERE user_id = $id AND service = 'google'";
    $update = $mysqli->query($sql);

}

if (isset($balance_yandex) AND isset($limit_yandex)) {
    $user_id = get_records_sql('users',"login = '$user'");

    while ($user_id1 = mysqli_fetch_assoc($user_id)) {
         ($id = $user_id1['id']);
    }

    $sql = "UPDATE balances_info SET balance = '$balance_yandex',  day_limit = '$limit_yandex' WHERE user_id = $id AND service = 'yandex'";
    $update = $mysqli->query($sql);
}

header('Location: /index.php?context=1');
