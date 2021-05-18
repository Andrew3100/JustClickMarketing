<?php
echo '
<div class="container-fluid">
    <div class="row">
            <!--Первая кнопка-->
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 150px;">Группы</button>
            <!--Вторая кнопка-->
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 150px; margin-left: 10px;">Контакты</button>
            <!--Третья кнопка-->
            <button class="btn btn-primary btn-sm" style="border-radius: 100px; width: 150px; margin-left: 10px;">Формы подписки</button>
            <button class="btn btn-primary btn-sm" style="border-radius: 100px; width: 150px; margin-left: 10px;">Обзвон</button>
    </div><br>
    <div class="row">
        <div class="col">
            <button class="btn btn-success">Новое задание</button>
        </div>
        <div class="col text-right">
        <!--Первая кнопка-->
        <button class="btn btn-primary" style="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
  <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
        Фильтр</button>
    </div>
    
    </div>
    <br>
    <div class="row">
        <div class="card" style="width: 160px;">
      <div class="card-body">
        <h5 class="card-title">Контактов</h5>
        <p class="card-text">1899</p>
        <!--<a href="#" class="btn btn-primary">Перейти куда-нибудь</a>-->
      </div>
    </div>
        <div class="card" style="width: 160px; margin-left: 10px;">
      <div class="card-body">
        <h5 class="card-title">Новых</h5>
        <p class="card-text">1899</p>
        <!--<a href="#" class="btn btn-primary">Перейти куда-нибудь</a>-->
      </div>
    </div>
    <div class="card" style="width: 400px; margin-left: 10px;">
      <div class="card-body">
        <div class="container-fluid">
            <div class="row">
            <div class="col-5">
            <p class="card-title">В работе</p>
        <p class="card-text">0</p>
            </div>
            <div class="col-7 bg-success">
        <p class="card-title">Упешно завершено</p>
        <p class="card-text">0</p>
            </div>
            </div
            
        </div>
        
        <!--<a href="#" class="btn btn-primary">Перейти куда-нибудь</a>-->
      </div>
    </div>
    </div>
    <div class="card bg-danger" style="width: 300px; margin-left: 10px;">
      <div class="card-body">
        <h5 class="card-title">Неуспешно завершено</h5>
        <p class="card-text">0</p>
        <!--<a href="#" class="btn btn-primary">Перейти куда-нибудь</a>-->
      </div>
    </div>
    
    
</div>
';


$switch = GetRoundSwitch('44px','17px');
echo "<br>
<div class='container-fluid'>
    <div class='row'>
        <table class='table table-hover'>
            <thead>
                <tr>
                    <td>Название</td>
                    <td>Категория</td>
                    <td>Контактов</td>
                    <td>Новых</td>
                    <td>В работе</td>
                    <td>Успешно завершено</td>
                    <td>Неуспешно завершено</td>
                    <td>Статус</td>
                </tr>    
            </thead>
            <tr>
                    <td>first</td>
                    <td> </td>
                    <td>1899</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>$switch</td>
                </tr>
        </table>    
    </div>
</div>
";