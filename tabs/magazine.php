<?php
/*Выводим кнопки*/
echo '
<div class="container">
    <div class="row">
            <!--Первая кнопка-->
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px;">Продукты</button>
            <!--Вторая кнопка-->
            <button class="btn btn-primary btn-sm text-center" style="border-radius: 100px; width: 120px; margin-left: 10px;">Кнопки заказа</button>
            <!--Вторая кнопка-->
            <button class="btn btn-primary btn-sm" style="border-radius: 100px; width: 120px; margin-left: 10px;">Формы заказа</button>
    </div><br>
    <div class="row">
        <div class="col text-right">
        <!--Первая кнопка-->
        <button class="btn btn-primary" style="">Категории</button>
    </div>
        <div class="col">
        <!--Вторая кнопка-->
        <button class="btn btn-primary" style="">Фильтр</button>
    </div>
    </div>
</div>
';

$switch = GetRoundSwitch('44px','17px');
echo "<br>
<div class='container'>
    <div class='row'>
        <table class='table table-hover'>
            <thead>
                <tr>
                    <td>Название</td>
                    <td>Категория</td>
                    <td>Стоимость</td>
                    <td>Скидки</td>
                    <td>Партнёрство</td>
                    <td>Допродажа</td>
                    <td>Тип товара</td>
                    <td>Режим</td>
                </tr>    
            </thead>
            <tr>
                    <td>Товар за 1 рубль</td>
                    <td>1</td>
                    <td>1 Р</td>
                    <td>2</td>
                    <td>0% + 0 ₽ </td>
                    <td>$switch</td>
                    <td>Электронный товар</td>
                    <td>$switch</td>
                </tr>
            <tr>
                    <td>Цифровой 1</td>
                    <td>digital</td>
                    <td>1 р</td>
                    <td>2</td>
                    <td>0% + 0 ₽ </td>
                    <td>$switch</td>
                    <td>Физический товар</td>
                    <td>$switch</td>
                </tr>
            <tr>
                    <td>Курс с тренингом</td>
                    <td>eqwewewew</td>
                    <td>3 000 ₽</td>
                    <td>2</td>
                    <td>0% + 0 ₽ </td>
                    <td>$switch</td>
                    <td>Физический товар</td>
                    <td>$switch</td>
                </tr>
            <tr>
                    <td>Цифровой 1</td>
                    <td>digital</td>
                    <td>1 р</td>
                    <td>2</td>
                    <td>0% + 0 ₽ </td>
                    <td>$switch</td>
                    <td>Физический товар</td>
                    <td>$switch</td>
                </tr>
            <tr>
                    <td>Электронная книга</td>
                    <td>digital</td>
                    <td>10 000 р</td>
                    <td>2</td>
                    <td>0% + 0 ₽ </td>
                    <td>$switch</td>
                    <td>Физический товар</td>
                    <td>$switch</td>
                </tr>
        </table>    
    </div>
</div>
";