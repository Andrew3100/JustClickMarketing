<?php

/*Выключаем режим отладки*/
function debug() {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
}
debug();


function get_records_sql($table,$condition,$print = 0)
{
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'jc_database'; // Имя БД

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    $mysqli->set_charset("utf8");
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

/*Смотрим из какого блока произошёл переход*/
/*Начало проверки блока новых пользователей*/
if ($_GET['month'] == 'jan') {
    $month = 'Январь';
}
if ($_GET['month'] == 'feb') {
    $month = 'Февраль';
}
if ($_GET['month'] == 'mar') {
    $month = 'Март';
}
if ($_GET['month'] == 'april') {
    $month = 'Апрель';
}
if ($_GET['month'] == 'may') {
    $month = 'Май';
}
if ($_GET['month'] == 'june') {
    $month = 'Июнь';
}
if ($_GET['month'] == 'jule') {
    $month = 'Июль';
}
if ($_GET['month'] == 'aug') {
    $month = 'Август';
}
if ($_GET['month'] == 'sept') {
    $month = 'Сентябрь';
}
if ($_GET['month'] == 'oct') {
    $month = 'Октябрь';
}
if ($_GET['month'] == 'nov') {
    $month = 'Ноябрь';
}
if ($_GET['month'] == 'dec') {
    $month = 'Декабрь';
}
/*Конец проверки блока новых пользователей*/


require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_line.php');
require_once('jpgraph-4.3.4/src/jpgraph_pie.php');
require_once('jpgraph-4.3.4/src/jpgraph_pie3d.php');
$datas_for_months = get_records_sql('reports_by_month',"month = '$month'");

while ($datas_for_month = mysqli_fetch_assoc($datas_for_months)) {

    $days[] = $datas_for_month['day_n'];
    $nums[] = $datas_for_month['new'];
    $male1[] = $datas_for_month['male'];
    $female1[] = $datas_for_month['female'];
    $bad[] = $datas_for_month['bad'];
    $age[] = $datas_for_month['age'];

}
for ($i = 0; $i < count($age); $i++) {
    if ($age[$i] < 20) {
        ($age_by_20[] = $age[$i]);
    }
    if ($age[$i] < 25 AND $age[$i] >= 20) {
        ($age_by_20_25[] = $age[$i]);
    }
    if ($age[$i] <= 35 AND $age[$i] >= 25) {
        ($age_by_25_35[] = $age[$i]);
    }
    if ($age[$i] > 35) {
        ($age_olders[] = $age[$i]);
    }

}

($ages_statistic = [count($age_by_20),count($age_by_20_25),count($age_by_25_35),count($age_olders)]);

$age_by_20_percent = floor((count($age_by_20) / array_sum($ages_statistic)) * 100);
$age_by_20_25_percent = floor((count($age_by_20_25) / array_sum($ages_statistic)) * 100);
$age_by_25_35_percent = floor((count($age_by_25_35) / array_sum($ages_statistic)) * 100);
$age_olders_percent = floor((count($age_olders) / array_sum($ages_statistic)) * 100);

/*Всего мужчин и женщин*/
$male = array_sum($male1);
$female = array_sum($female1);
/*Считаем проценты*/
$male_percent = floor(($male / ($male + $female)) * 100);
$female_percent = floor(($female / ($male + $female)) * 100);

if ($_GET['data']!='newusers') {


    $graph = new Graph(1500, 300, 'auto', 10, true);
// Указываем, какие оси использовать:
    $graph->SetScale('textlin');
    $lineplot = new LinePlot($nums, $days);
// Задаём цвет кривой
    $lineplot->SetColor('forestgreen');
// Присоединяем кривую к графику:
    $graph->Add($lineplot);
// Даем графику имя:
    $graph->title->Set("Отчёт о посещаемости за $month");
    $graph->title->SetFont(FF_ARIAL, FS_NORMAL);
    $graph->xaxis->title->SetFont(FF_VERDANA, FS_ITALIC);
    $graph->yaxis->title->SetFont(FF_TIMES, FS_BOLD);
// Назовем оси:
    $graph->xaxis->title->Set('День месяца');
    $graph->yaxis->title->Set('Количество посетителей');
// Выделим оси цветом:
    $graph->xaxis->SetColor('#СС0000');
    $graph->yaxis->SetColor('#СС0000');
// Зададим толщину кривой:
    $lineplot->SetWeight(3);

// Обозначим точки звездочками, задав тип маркера:
    $lineplot->mark->SetType(MARK_FILLEDCIRCLE);

// Выведем значения над каждой из точек:
    $lineplot->value->Show();

// Фон графика зальем градиентом:
    $graph->SetBackgroundGradient('ivory', 'orange');

// Придадим графику тень:
    $graph->SetShadow(4);

    /*
    Выведем получившееся изображение в браузер (в случае если
    при создании объекта graph последний параметр был false,
    изображение будет сохранено в кеше, но не выдано в браузер)
    */

    $graph->Stroke();
}

if ($_GET['data']!='sex') {
    // Статистика использования браузеров в процентах
    $data = array($male_percent, $female_percent);
    $legends = array(
        'Мужчины',
        'Женщины'
    );

    // Создаём график
    $graph = new PieGraph(600, 450);
    $graph->SetShadow();

    // Заголовок графика
    $graph->title->Set("Статистика полового признака за $month");
    $graph->title->SetFont(FF_VERDANA, FS_BOLD, 14);

    // Расположение "Легенды" (в процентах/100)
    $graph->legend->Pos(0.1, 0.2);

    // Создаём круговую диаграмму 3D
    $p1 = new PiePlot3d($data);

    // Центр круга (в процентах/100)
    $p1->SetCenter(0.45, 0.5);

    // Угол наклона диаграммы
    $p1->SetAngle(30);

    // Шрифт для подписей
    $p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);

    // Подписи для сегментов диаграммы
    $p1->SetLegends($legends);

    // Присоединяем диаграмму к графику

    $graph->Add($p1);
    // Выводим график

    $graph->Stroke();
}

if ($_GET['data']!='bad') {
    $data = array($r = rand(30,50), 100 - $r);
    $legends = array(
        'Отказы',
        'Оставшиеся пользователи'
    );

    // Создаём график
    $graph = new PieGraph(600, 450);
    $graph->SetShadow();

    // Заголовок графика
    $graph->title->Set("Статистика отказов за $month");
    $graph->title->SetFont(FF_VERDANA, FS_BOLD, 14);

    // Расположение "Легенды" (в процентах/100)
    $graph->legend->Pos(0.1, 0.2);

    // Создаём круговую диаграмму 3D
    $p1 = new PiePlot3d($data);

    // Центр круга (в процентах/100)
    $p1->SetCenter(0.45, 0.5);

    // Угол наклона диаграммы
    $p1->SetAngle(30);

    // Шрифт для подписей
    $p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);

    // Подписи для сегментов диаграммы
    $p1->SetLegends($legends);

    // Присоединяем диаграмму к графику

    $graph->Add($p1);
    // Выводим график

    $graph->Stroke();
}

if ($_GET['data']!='age') {

    $data = array($age_by_20_percent, $age_by_20_25_percent, $age_by_25_35_percent,$age_olders_percent);
    $legends = array(
        'До 20 лет',
        '20 - 25 лет',
        '25 - 35 лет',
        'Старше 35 лет'
    );

    // Создаём график
    $graph = new PieGraph(600, 450);
    $graph->SetShadow();

    // Заголовок графика
    $graph->title->Set("Статистика возрастов за $month");
    $graph->title->SetFont(FF_VERDANA, FS_BOLD, 14);

    // Расположение "Легенды" (в процентах/100)
    $graph->legend->Pos(0.1, 0.2);

    // Создаём круговую диаграмму 3D
    $p1 = new PiePlot3d($data);

    // Центр круга (в процентах/100)
    $p1->SetCenter(0.45, 0.5);

    // Угол наклона диаграммы
    $p1->SetAngle(45);

    // Шрифт для подписей
    $p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);

    // Подписи для сегментов диаграммы
    $p1->SetLegends($legends);

    // Присоединяем диаграмму к графику

    $graph->Add($p1);
    // Выводим график

    $graph->Stroke();
}

