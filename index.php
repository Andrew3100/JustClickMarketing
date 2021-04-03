<?php
/*Бутстрап*/
include "bootstrap_template/template.html";
/*Тут хранятся все самописные функции*/
require_once 'lib/lib.php';

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
/*Выводим контент*/
include 'lib/special_for_body.php';
?>

