<?php


$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'jc_database'; // Имя БД
backup_tables($db_host,$db_user,$db_password,'jc_database');
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
    $link = mysqli_connect($host,$user,$pass);
    mysqli_select_db($name,$link);
    // Если бекапим все таблицы
    if($tables == '*')
    {
        $tables = array();
        $result = mysqli_query('SHOW TABLES from jc_database');
        while($row = mysqli_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    // проходим по массиву таблиц
    foreach($tables as $table)
    {
        $result = mysqli_query('SELECT * FROM '.$table);
        $num_fields = mysqli_num_fields($result);
        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysqli_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "nn".$row2[1].";nn";
        for ($i = 0; $i < $num_fields; $i++)
        {
            while($row = mysqli_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j<$num_fields; $j++)
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = preg_replace("n","n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j<($num_fields-1)) { $return.= ','; }
                }
                $return.= ");n";
            }
        }
        $return.="nnn";
    }
    // пишем результат в файл
    $handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
}