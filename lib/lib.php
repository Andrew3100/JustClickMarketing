
<?php

function database_connect() {
    $connect = 'Успешно';
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД
    $db_base = 'jc_database'; // Имя БД

// Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    $mysqli->set_charset("utf8");
    if ($mysqli->connect_error) {
        $connect = 'Ну такое';
    }
    return $connect;
}




include "bootstrap_template/template.html";

/*На вход передаём цвет шапки*/
function GetHeader($color) {
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

?>



