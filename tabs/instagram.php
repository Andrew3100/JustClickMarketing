<?php

if ($_GET['target'] == 1) {
    $type = 'target';
}
if ($_GET['social'] == 1) {
    $type = 'social';
}


$datas = get_records_sql('target_recomendes',"service = 'insta' AND piar_type = '$type'");

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

