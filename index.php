<?php
/*Бутстрап*/
include "bootstrap_template/template.html";
/*Тут хранятся все самописные функции*/
require_once 'lib/index.php';


/*Варианты управления цветом шапки
navbar navbar-dark bg-primary
                      secondary - серая
                      success - зелёная
                      danger - красноватая
                      warning - бледно-жёлтая
                      info - хз
                      light - светлая
                      dark - темная
 -
*/
/*Передаём тёный цвет шапки*/
$header_color = 'navbar navbar-dark bg-dark';
echo GetHeader($header_color);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="width: 100%">
<!--Стайлом убираем отступы-->
<div class="container-fluid" style="padding: 0">
    <div class="row">
        <!--Боковые вкладки-->
        <div class="col-1 text-center" style="background-color: #3e3f43">
            <div class="row">

            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>
            <div class="row">
                <a href="#"><p style="color: white">Иконка</p></a>
            </div><br>









        </div>
        <div class="col-11">Основной контент</div>
    </div>
</div>
</body>
</html>
