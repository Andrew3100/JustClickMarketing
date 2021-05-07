<?php

/*Выводим кнопки*/
echo '
<div class="container-fluid">
    <div class="row">
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px;">Задачи</button>
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px; margin-left: 10px;">Процессы</button>
            <button class="btn btn-primary btn-sm" style="border-radius: 100px; width: 120px; margin-left: 10px;">Правила</button>
    </div><br>
    <div class="row">
        <div class="col text-right">
        
        <button class="btn btn-primary" style="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
  <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
        Фильтр</button>
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
                    <td>Задача</td>
                    <td>Срок / периодичность выполнения</td>
                    <td>Актуальность</td>
                    
                </tr>    
            </thead>
            
            <tr>
                    <td>Продать 10 курсов по английскому языку</td>
                    <td>1 месяц</td>
                    <td>$switch</td>
                </tr>
            <tr>
                    <td>Продать 15 курсов по WEB-программированию</td>
                    <td>1 июня 2021 года</td>
                    <td>$switch</td>
                </tr>
        </table>    
    </div>
    <button class='btn btn-success'>Добавить новую задачу</button>
</div>
";