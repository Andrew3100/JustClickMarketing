<?php
include 'scripts/database.php';
 $header = $_POST['header'];
 $description = $_POST['description'];
 $mail = $_POST['mail'];
$username = $_COOKIE['user'];
$date = date("Y-m-d",time());
$time = date("H:i:s",time());
$add_supp = $mysqli->query("INSERT INTO support_list (username,mail,`date`,`time`) VALUES ('$username','$mail','$date','$time','$header','$description')");

if ($add_supp) {
    echo 'добавлено';
}
print_r("INSERT INTO support_list (username,mail,`date`,`time`) VALUES ('$username','$mail','$date','$time','$header','$description')");