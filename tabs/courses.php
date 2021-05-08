<?php
/*Кнопки*/
echo '
<div class="container-fluid">
    <div class="row">
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px;">Курсы</button>
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px; margin-left: 10px;">Уроки</button>
            <button class="btn btn-primary btn-sm" style="border-radius: 100px; width: 120px; margin-left: 10px;">Отчёты</button>
    </div><br>
    <div class="row">
        <div class="col">
            <button class="btn btn-success" style="">Добавить курс</button>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary" style="">Вид</button>
            <button class="btn btn-primary" style="">Фильтр</button>
        </div>
    
    </div>
</div>
';

echo "<br>
<div class='container-fluid'>
    <div class='row'>
        <table class='table table-hover'>
            <thead>
                <tr>
                    <td>Наименование курса</td>
                    <td>Ссылка на курс</td>
                    <td>Продолжительность курса</td>
                    <td>Стоимость курса</td>
                </tr>    
            </thead>
            <tr>
            <td>Web-дизайн</td>
            <td>https://beonmax.com/section/web-development/</td>
            <td>72 часа</td>
            <td>16 000 рублей</td>
            </tr>
            <tr>
            <td>Web-программирование</td>
            <td>https://beonmax.com/section/programming/</td>
            <td>72 часа</td>
            <td>30 000 рублей</td>
            </tr>
            <tr>
            <td>Английский язык для переводчиков</td>
            <td>https://lingvadiary.ru/?p=199</td>
            <td>60 часов</td>
            <td>25 000 рублей</td>
            </tr>
            
        </table>    
    </div>
</div>
";

