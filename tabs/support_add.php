<?php
include 'scripts/database.php';
 $header = $_POST['header'];
 $description = $_POST['description'];
 $mail = $_POST['mail'];
$username = $_COOKIE['user'];
$date = date("Y-m-d",time());
$time = date("H:i:s",time());
$add_supp = $mysqli->query("INSERT INTO support_list (username,mail,`date`,`time`,header,description) VALUES ('$username','$mail','$date','$time','$header','$description')");

$mail = mail('funikov.1997@mail.ru','Тема',$description);
if ($mail) {
    echo 'Письмо отправлено успешно';
}
exit();/*
echo "<script>alert('Благодарим за обращение! С Вами свяжутся в течение 15 по указанному адресу электронной почты')</script>";
echo "<script>window.location.replace('/index.php?sup=1');</script>";*/