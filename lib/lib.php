
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
    <nav class="navbar navbar-expand-lg '.$color.'">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
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


