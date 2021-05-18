<?php
include 'lib/lib.php';
$set = setcookie('user',$_COOKIE['user'],time() - 3600*24, "/");
isAuth();