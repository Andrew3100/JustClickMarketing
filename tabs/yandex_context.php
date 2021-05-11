<?php
$user = $_COOKIE['user'];


$user_id = get_records_sql('users',"login = '$user'");

while ($user_id1 = mysqli_fetch_assoc($user_id)) {
    ($id = $user_id1['id']);
}
$balance = get_records_sql("balances_info","user_id = '$id' AND service = 'yandex'");

while ($balance1 = mysqli_fetch_assoc($balance)) {
    $balance_data = $balance1['balance'];
    $day_limit = $balance1['day_limit'];
    $create = $balance1['date_create'];
}

if ($day_limit != 0) {
    $days_col = floor($balance_data / $day_limit);
    $warning = "<tr><td>Через $days_col дней необходимо пополнить баланс</td></tr>";
}

echo "<h5 style='text-align: center'>В этом разеле представлена информация о текущем балансе Yandex Метрики</h5>";

if ($day_limit == 0) {
    unset($warning);
}


echo "<br><br>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col text-center'>
    <table class='table table-hover' style='width: 400px; margin: auto'>
        <tr><td>Текущий баланс: $balance_data</td></tr>
        <tr><td>Ежедневное списание: $day_limit</td></tr>
        $warning
        <tr><td><a style='color: green;' data-toggle='modal' data-target='#exampleModal1'>Внести данные о пополнении баланса</a></td></tr>
    </table>    
            </div>
        </div>
    </div>
";

echo '
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Яндекс Метрика</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/tabs/scripts/add_balance_data.php">
            <p style="text-align: center">Внимание! При внесении данных о балансе старые данные обновятся!</p>
            <label for="exampleFormControlInput1" class="form-label">Сумма баланса</label>
            <input name="balance_yandex" type="number" class="form-control" min="0" max="1000000" id="exampleFormControlInput1">
            <label for="exampleFormControlInput2" class="form-label">Ежедневное списание</label>
            <input name="limit_yandex" type="number" class="form-control" min="0" max="100000" id="exampleFormControlInput2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-primary">Внести данные о балансе</button>
      </div>
        </form>
    </div>
  </div>
</div>';

