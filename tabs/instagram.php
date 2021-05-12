<?php
$datas = get_records_sql('target_recomendes',"service = 'insta'");

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

