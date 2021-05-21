<?php
$user = $_COOKIE['user'];

$user_id = get_records_sql('users',"login = '$user'");

while ($user_id1 = mysqli_fetch_assoc($user_id)) {
    ($id = $user_id1['id']);
}
$balance = get_records_sql("balances_info","user_id = '$id' AND service = 'google'");

while ($balance1 = mysqli_fetch_assoc($balance)) {
    $balance_data = $balance1['balance'];
    $day_limit = $balance1['day_limit'];
    $create = $balance1['date_create'];
}

if ($day_limit != 0) {
    $days_col = floor($balance_data / $day_limit);
    if ($days_col < 3) {
        $color = 'red';
    }
    else {
        $color = 'green';
    }
    $warning = "<p style='color: $color'>Через $days_col дней необходимо пополнить баланс</p>";
}

echo "<h5 style='text-align: center'>В этом разеле представлена информация о текущем балансе Google Аналитики</h5>";

if ($day_limit == 0) {
    unset($warning);
}


echo "<br><br>
    <div class='container'>
        <div class='row'>
            <div class='col text-center'>
    <table class='table table-hover table-bordered' style='width: 100%; margin: auto'>
        <tr>
        <td>Текущий баланс: $balance_data</td>
        <td>Ежедневное списание: $day_limit</td>
        <td>$warning</td>
        <td>
            <a href='/tabs/doc_google.html' target='_blank'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-info-lg' viewBox='0 0 16 16'>
              <path d='m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z'/>
            </svg></a>
        </td>
        </tr>
        <tr><td><button class='btn btn-primary' style='color: white;' data-toggle='modal' data-target='#exampleModal1'>Внести данные о пополнении баланса</button></td></tr>
    </table>    
            </div>
        </div>
    </div>
";

echo '<br><br>
<div class="container">
<h4>Статистика по Google Аналитике:<br></h4><br>
    <div class="row">
        <div class="col">
            <form action="/tabs/graph.php" method="get" style="width: 400px;">
                <label for="select" class="form-label">Выберите период</label>
                <select name="month" id="select" class="form-select" aria-label="Default select example">
                  <option selected>Выберите месяц</option>
                  <option value="jan">Январь</option>
                  <option value="feb">Февраль</option>
                  <option value="mar">Март</option>
                  <option value="april">Апрель</option>
                  <option value="may">Май</option>
                  <option value="june">Июнь</option>
                  <option value="jule">Июль</option>
                  <option value="aug">Август</option>
                  <option value="sept">Сентябрь</option>
                  <option value="oct">Октябрь</option>
                  <option value="nov">Ноябрь</option>
                  <option value="dec">Декабрь</option>
                </select>
            
        </div>
    </div>
    <div class="row">
    <div class="col"><br>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="newusers" name="data" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Отчёт по посетителям
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="age" name="data" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Отчёт по среднему возрасту
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="bad" name="data" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
            Отчёт по соотношению отказов и оставшихся пользователей
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="sex" name="data" id="flexRadioDefault4">
          <label class="form-check-label" for="flexRadioDefault4">
            Отчёт по посетителям половому признаку
          </label>
        </div><br>
        <button type="submit" class="btn btn-success">Сгенерировать отчёт</button>
        </form>
        </div>
    </div>
</div>
';






echo '
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Гугл Аналитика</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/tabs/scripts/add_balance_data.php">
            <p style="text-align: center">Внимание! При внесении данных о балансе старые данные обновятся!</p>
            <label for="exampleFormControlInput1" class="form-label">Сумма баланса</label>
            <input name="balance_google" type="number" class="form-control" min="0" max="1000000" id="exampleFormControlInput1">
            <label for="exampleFormControlInput2" class="form-label">Ежедневное списание</label>
            <input name="limit_google" type="number" class="form-control" min="0" max="100000" id="exampleFormControlInput2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-primary">Внести данные о балансе</button>
      </div>
        </form>
    </div>
  </div>
</div>';

