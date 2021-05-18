<?php
$text = 'Благодарим за обращение! Ответ придёт в течение 15 минут';
echo '

<div class="container">
    <div class="row">
        <div class="col text-center">
        <h3>Приветствуем Вас в разделе технической поддержки. Пожалуйста, перед обращением изучите документацию к системе</h3>
            <br>
            <br>
            <br>
            <form action="/tabs/support_add.php" method="post">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Что у Вас случилось?</label>
                  <input type="text" name="header" class="form-control" id="exampleFormControlInput1" placeholder="Краткое описание проблемы">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Подробно опишите проблему</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Адрес электронной почты</label>
                  <input type="email" name="mail" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                </div>
                
                <button onclick="alert('.$text.')" type="submit" class="btn btn-success">Отправить запрос</button>
            </form>
        </div>
    </div>
</div>

';