<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    .tabs {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .tabs>input[type='radio'] {
        display: none;
    }

    .tabs>input[type='radio']:checked+label {
        background-color: #bdbdbd;
    }

    .tabs>div {
        /* скрыть контент по умолчанию */
        display: none;
        border: 1px solid #eee;
        padding: 10px 15px;
        border-radius: 4px;
    }

    /* отобразить контент, связанный с вабранной радиокнопкой (input type='radio') */
    #tab-btn-1:checked~#content-1,
    #tab-btn-2:checked~#content-2,
    #tab-btn-3:checked~#content-3 {
        display: block;
    }

    .tabs>label {
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: #eee;
        border: 1px solid transparent;
        padding: 2px 8px;
        font-size: 16px;
        line-height: 1.5;
        border-radius: 4px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        margin-left: 6px;
        cursor: pointer;
        margin-bottom: 10px;
    }

    .tabs>label:first-of-type {
        margin-left: 0;
    }
</style>
<body>
<div class='container'>
    <div class='row'>
        <h5 style='text-align: center'>
            В этом разеле представлена документация по организации тагетированной рекламы в социальных сетях
        </h5>
    </div><br>
    <div class='row'>
        <div class='col text-center'>
            <div class='tabs'>

                <input type='radio' name='tab-btn' id='tab-btn-1' value='' checked>
                <label for='tab-btn-1'>Instagram</label>
                <input type='radio' name='tab-btn' id='tab-btn-2' value=''>
                <label for='tab-btn-2'>Facebook</label>
                <input type='radio' name='tab-btn' id='tab-btn-3' value=''>
                <label for='tab-btn-3'>VK</label>

                <div id='content-1'>
                    <?php
                    include 'instagram.php';
                    ?>
                </div>
                <div id='content-2'>
                    <?php
                    include 'facebook.php';
                    ?>
                </div>
                <div id='content-3'>
                    <?php
                    include 'vk.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if (admin()) {
    echo "
<br>
<br>
    <div class='container'>
        <div class='row'>
            <form action='/tabs/add_recomend.php' method='post'>
                <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Заголовок</label>
                  <input type='text' name='header' class='form-control' id='exampleFormControlInput1' placeholder=''>
                </div>
                <div class='mb-3'>
                  <label for='exampleFormControlTextarea1' class='form-label'>Описание</label>
                  <textarea name='text' class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
                </div>
                <div class='mb-3'>
                  <label for='e' class='form-label'>Описание</label>
                  <select name='service' class='form-control' id='e'>
                    <option>Instagram</option>
                    <option>Facebook</option>
                    <option>VK</option>
                  </select>
                </div>
                <button type='submit' class='btn btn-success'>Добавить</button>
            </form>
        </div>
    </div>
    ";
}
?>

</body>
</html>

