<?php
echo "
<div class='container'>
    <div class='row'>
        <h5 style='text-align: center'>
            В этом разеле представлена документация по организации таргетированной рекламы в социальных сетях
        </h5>
    </div><br>
    <div class='row'>
        <div class='col text-center'>
        
        </div>
    </div>
</div>
";

$datas = get_records_sql('target_recomendes_all','');

while ($datas1 = mysqli_fetch_assoc($datas)) {
    $header = $datas1['header'];
    $description = $datas1['text'];
    echo "
    <div class='container'>
        <div class='row'>
            <div class='col'>
                <h4>$header</h4>  
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <h4>$description</h4>  
            </div>
        </div>
    </div>";

}
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
?>

</body>
</html>
