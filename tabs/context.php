<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Модальное окно на чистом CSS</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
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

        .tabs>input[type="radio"] {
            display: none;
        }

        .tabs>input[type="radio"]:checked+label {
            background-color: #bdbdbd;
        }

        .tabs>div {
            /* скрыть контент по умолчанию */
            display: none;
            border: 1px solid #eee;
            padding: 10px 15px;
            border-radius: 4px;
        }

        /* отобразить контент, связанный с вабранной радиокнопкой (input type="radio") */
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

</head>

<body>

<div class="tabs">
    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
    <label for="tab-btn-2">Google</label>
    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
    <label for="tab-btn-1">Yandex</label>

    <div id="content-1">
        <?php
        include 'google_context.php';
        ?>
    </div>
    <div id="content-2">
        <?php
        include 'yandex_context.php';
        ?>
    </div>
</div>

</body>

</html>