<?php
include "scripts/database.php";
$header = $_POST['header'];
$text = $_POST['text'];
$service = strtolower($_POST['service']);

if ($service == 'instagram') {
    $net = 'insta';
}
else {
    if ($service == 'vk') {
        $net = 'vk';
    }
    else {
        $net = 'facebook';
    }
}

$add = $mysqli->query("INSERT INTO target_recomendes (header,text,service) VALUES ('$header','$text','$net')");

if ($add) {
    header('Location: /index.php?target=1');
}