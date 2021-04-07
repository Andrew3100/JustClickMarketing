<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Стайлом убираем отступы-->
<div class="container-fluid" style="padding: 0">
    <div class="row">
        <!--Боковые вкладки-->
        <div class="col-1 text-center bg-dark" >
            <div class="row">

            </div><br>
            <div class="row">
                <a href="index.php?voronka=1"><p style="color: white">Воронки</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?magazine=1"><p style="color: white">Магазин</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?site=1"><p style="color: white">Сайт</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?tgm=1"><p style="color: white">Рассылки</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?crm=1"><p style="color: white">CRM</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?notes=1"><p style="color: white">Задачи</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?context=1"><p style="color: white">Контекстная реклама</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?target=1"><p style="color: white">Таргетинговая реклама</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?social=1"><p style="color: white">Социальные сети</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?courses=1"><p style="color: white">Курсы</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?analitics=1"><p style="color: white">Аналитика</p></a>
            </div><br>
            <div class="row">
                <a href="index.php?partners=1"><p style="color: white">Партнёрка</p></a>
            </div><br>
        </div>
        <div class="col-11"><br>
            <!--Выполняем код файла-->
            <?php GetLinkName() ?>
        </div>
    </div>
</div>
</body>
</html>
<?php
function GetLinkName() {
    if ($_GET['voronka']) {
        $get_file_name = 'voronka';
    }
    if ($_GET['magazine']) {
        $get_file_name = 'magazine';
    }
    if ($_GET['site']) {
        $get_file_name = 'notes';
    }
    if ($_GET['tgm']) {
        $get_file_name = 'tgm';
    }
    if ($_GET['crm']) {
        $get_file_name = 'crm';
    }
    if ($_GET['notes']) {
        $get_file_name = 'notes';
    }
    if ($_GET['courses']) {
        $get_file_name = 'courses';
    }
    if ($_GET['analitics']) {
        $get_file_name = 'analitics';
    }
    if ($_GET['partners']) {
        $get_file_name = 'partners';
    }
    if ($_GET['context']) {
        $get_file_name = 'context';
    }
    if ($_GET['target']) {
        $get_file_name = 'target';
    }
    if ($_GET['social']) {
        $get_file_name = 'social';
    }

    /*Выполняем тот файл, на который указывает параметр в адресной строке*/
    return include "tabs/$get_file_name.php";
}