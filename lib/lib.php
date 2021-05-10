
<?php

isAuth();

/*На вход передаём цвет шапки*/
function GetHeader($color) {
    include "bootstrap_template/template.html";
    $header = '
  <div class="row">
    <div class="col-1 bg-primary text-center">
        <h1 style="color: white">JC</h1>
    </div>
    <div class="col-11 bg-dark">
    
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid" style="padding: 0">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    </div>
    </div>
    ';
    return $header;
}


/*Переключатели круглый и квдартный*/
function GetRoundSwitch($width,$height) {
    $switch = '<label class="switch" style="height: '.$height.'; width: '.$width.';">
          <input class="bg-dark" type="checkbox" checked>
          <span class="slider round"></span>
        </label>';
    return $switch;
}
function GetSquareSwitch($width,$height) {
    $switch = '<label class="switch" style="height: '.$height.'; width: '.$width.'; background-color: yellow">
      <input type="checkbox" checked>
      <span class="slider"></span>
    </label>';
    return $switch;
}


/*Проверка авторизации*/
function isAuth() {
    $x = true;
    if ($_COOKIE['user']=='') {
        echo "<script>window.location.replace('/index.html')</script>";
        $x = false;
        exit();
    }
    return $x;
}

/*Забор записей из таблицы*/
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

/*имя параметра гет*/
function gpr() {
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = substr($url,0,-2);
    $get = strpos($url,'?');
    $get = substr($url,$get+1);
    return $get;
}

/*Получить список полей заданной таблицы*/
function get_field_list($table_name) {
    $field_list = array();
    include 'database.php';
    $sql = "SHOW COLUMNS FROM `$table_name`";
    $res_sql = $mysqli->query($sql);


    while ($res_sql1 = mysqli_fetch_assoc($res_sql)) {
        $field_list[] = $res_sql1['Field'];
    }
    unset($field_list[0]);
    unset($field_list[count($field_list)]);
    return $field_list;
}

/*Выключаем режим отладки*/
function debug() {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
}

/*Фиксирование лога*/
function fixed_log($event) {
    database_connect();
    $time = date("H:i:s",time());
    $date = date('Y-m-d',time());
    $date = explode('-',$date);
    $date = implode($date,'-');
    $user = $_COOKIE['user'];
    $fixed_log = $mysqli->query("INSERT INTO logs (`event`,`date`,`time`,`username`) VALUES ('$event','$date','$time','$user')");
    /*echo '<pre>';
    print_r("INSERT INTO logs (`event`,`date`,`time`,`username`) VALUES ('$event','$date','$time','$user')");
    echo '</pre>';*/
}